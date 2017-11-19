* make a directory with 4 folders core, models, controllers, views
* make a file core/db.php
* require 2 composer package [illuminate/database, illuminate/events]
* If you want to use any package you should require `vendor/autoload.php` in your file
* paste connection code to `core/db.php` file and add your credentials
* in order to add any of your file in `autoload.php` you should tell your `composer.json` file following
~~~json
"autoload": {
  "files": ["<fileName>"],
  "classmap": ["models"]
}
~~~
* in order to dump your file to `autoload.php` file, you have to use commmand `composer dump-autoload`
* to create table using schema copy schema code from `illuminate/database` package
~~~php
Capsule::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('email')->unique();
    $table->timestamps();
});
~~~
* fields I used in this class
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
* to make any integer unsigned we will use `unsigned` function. Its mandatory.
~~~php
Capsule::schema()->create('users', function ($table) {
  $table->integer('id')->unsigned();
});
~~~
* to make any field unique we will use `unique` function. Its mandatory.
~~~php
Capsule::schema()->create('users', function ($table) {
  $table->integer('id')->unique();
});
* to drop table we use `drop` or `dropIfExists`
~~~php
Capsule::schema()->dropIfExists(<tablename>);
Capsule::schema()->drop(<tablename>);
~~~
* to insert data we will use insert function
~~~php
// query builder
Capsule::table('<tableName>')->insert();
// eloquent way
<ModelName>::insert();
~~~
* how to create a model
~~~php
use Illuminate\Database\Eloquent\Model;
class City extends Model{
  protected $table = 'cities';
  protected $hidden = [];
  protected $guarded = [];
  protected $fillable = [];
}
~~~
* view
~~~php
// query way
Capsule::select('your sql query');
// eloquent way
City::all();
~~~
* delete
~~~php
$city = City::find(1);
$city->delete();
~~~
* update
~~~php
$city = City::find(1);
$city->update([]);
~~~

* crud
~~~php
City::insert([]);
City::all();
City::find(1)->update([]);
City::find(1)->delete();
~~~



