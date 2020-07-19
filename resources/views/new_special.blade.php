
        @foreach ($roomOfUserVip as $roomVip)
            <div class=" col-6 col-md-3 col-lg-2 ftco-animate">
                     <?php dd(11); ?>
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                    <?php 
                    //dd($roomOfUserVip);
                        $image = str_replace("[","",$roomVip->image);
                        $image = str_replace("]","",$image);
                        $image = str_replace("`","",$image);
                        $dirs = explode(',', $image);
                        //dd($dirs); 
                    ?>
                        <div class="img align-self-stretch" style="background-image: url({{$dirs[0]}}); background-size: cover; background-position: center; background-repeat: no-repeat;"> </div>
                    </div></a>
                    <div class="text pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">{{number_format($roomVip->price, 0, '', ',')}}</span><u>
                                    đ</u></p>
                            <div class="p-1" style="overflow: hidden; line-height: 1.5em; height: 3em;"><a href="#">{{$roomVip->title}}</a></div>
                            <p style="line-height: 1em;" class="mb-0">...</p>
                            <span class="position">{{$roomVip->fullname}}</span><span> - </span>
                            <span class="position">{{$roomVip->_name}}</span><br>
                            <a href="#" class="btn btn-primary">Xem</a>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate m-0"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-heart"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach