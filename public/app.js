const express = require('express');
const bodyParser = require('body-parser');
const graphqlHttp = require('express-graphql');
const mongoose = require('mongoose');
const { dbInit } = require( './src/includes/db_init' );
const { messageCodes } = require( './src/includes/message_codes' );
const {schema} = require("./src/schema");
const{upload} = require("./src/schema/list/uploadSchema");
const app = express();
var multer  = require('multer');
var multerUpload = multer();


mongoose.connect(`mongodb+srv://${process.env.MONGO_USER}:${process.env.MONGO_PASSWORD}@reshare-fgyiz.mongodb.net/${process.env.MONGO_DB}?retryWrites=true&w=majority`, { useUnifiedTopology: true, useNewUrlParser: true })
.then(() => {
    app.listen( 8080, () => {
        dbInit();

        app.use( bodyParser.json() );

        app.use('/graphql', graphqlHttp(
            {
                schema: schema,
                graphiql: true,
                customFormatErrorFn(err) {
                    if(err.message != null){
                        if( messageCodes.hasOwnProperty(err.message)){
                            var obj = messageCodes[err.message];
                            err.message = obj.text;
                            err.statusCode = obj.statusCode;
                            err.textCode = obj.textCode;
                        }else{
                        err.textCode = "bad_request";
                        err.statusCode = 400;
                        }
                    }
                    return err;
                },
            }
        ));

        app.post('/upload', multerUpload.array('files', 5), upload.resolve);

        console.log("App is listening at port 8080 ...");
    })
})
.catch( err => {
    console.log(err);
});
