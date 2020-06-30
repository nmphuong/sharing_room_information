INSERT INTO `role` (`name`, `capability`) VALUES
('admin', '[`addPost`, `editPost`, `deletePost`, `approved`, `post` , `addUser`, `login`, `logout`, `blockUser`, `unblockUser`, `deleteUser`,`socialLogin`, `register`, `appSetting`, `addRole`]'),
('guest', '[`post` , `login`,`socialLogin`, `register`]'),
('customer', '[`addPost`, `editPost`, `deletePost`, `post` , `login`, `logout`,`socialLogin`, `register`, `upgradeAccount`]');