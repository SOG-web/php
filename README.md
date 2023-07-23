<!--
 Copyright 2023 ROU Technology

 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
-->

mysql -u root
To start mysql now and restart at login:
brew services start mysql
Or, if you don't want/need a background service you can just run:
/usr/local/opt/mysql/bin/mysqld_safe --datadir=/usr/local/var/mysql

mysql> create database myapp;

### https://github.com/laracasts/PHP-For-Beginners-Series.git
