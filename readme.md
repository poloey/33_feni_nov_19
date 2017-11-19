1. make a directory with 4 folders core, models, controllers, views
1. make a file core/db.php
1. require 2 composer package [illuminate/database, illuminate/events]
1. If you want to use any package you should require `vendor/autoload.php` in your file
1. paste connection code to `core/db.php` file and add your credentials
1. in order to add any of your file in `autoload.php` you should tell your `composer.json` file following
~~~json
"autoload": {
  "files": ["<fileName>"],
  "classmap": ["models"]
}
~~~
1. in order to dump your file to `autoload.php` file, you have to use commmand `composer dump-autoload`
1. to create table using schema copy schema code from `illuminate/database` package
~~~php
Capsule::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('email')->unique();
    $table->timestamps();
});
~~~
1. fields I used in this class
~~~bash
# to create id
increments()
# to create created_at, updated_at column
timestamps();
# to create varchar string
string()
# to create text
text()
# to create int
integer()
~~~
1. to make any integer unsigned we will use `unsigned` function. Its mandatory.
~~~php
Capsule::schema()->create('users', function ($table) {
  $table->integer('id')->unsigned();
});
~~~
1. to make any field unique we will use `unique` function. Its mandatory.
~~~php
Capsule::schema()->create('users', function ($table) {
  $table->integer('id')->unique();
});
1. to drop table we use `drop` or `dropIfExists`
~~~php
Capsule::schema()->dropIfExists(<tablename>);
Capsule::schema()->drop(<tablename>);
~~~
1. to insert data we will use insert function
~~~php
// query builder
Capsule::table('<tableName>')->insert();
// eloquent way
<ModelName>::insert();
~~~
1. how to create a model
~~~php
use Illuminate\Database\Eloquent\Model;
class City extends Model{
  protected $table = 'cities';
  protected $hidden = [];
  protected $guarded = [];
  protected $fillable = [];
}
~~~
1. view
~~~php
// query way
Capsule::select('your sql query');
// eloquent way
Capsule::all();
~~~
1. delete
~~~php
$city = City::find(1);
$city->delete();
~~~
1. update
~~~php
$city = City::find(1);
$city->update([]);
~~~




