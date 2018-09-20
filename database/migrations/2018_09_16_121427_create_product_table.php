<?phpSchema::create('tbl_product', function (Blueprint $table) {
            $table->bigIncrements('pk_product_id');
            $table->enum('payer_type',['user','company','bid']);
            $table->integer('payer_id');
            $table->string('name');
            $table->text('description');
            $table->string('price');
            $table->string('discount');
            $table->string('final_price');
            $table->enum('follower_type',['user','company','bid']);
            $table->bigInteger('follower_id');
            $table->timestamps();
        });

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**tbl_followup
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->bigIncrements('pk_product_id');
            $table->enum('payer_type',['user','company','bid']);
            $table->integer('payer_id');
            $table->string('name');
            $table->text('description');
            $table->string('price');
            $table->string('discount');
            $table->string('final_price');
            $table->enum('follower_type',['user','company','bid']);
            $table->bigInteger('follower_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_product');
    }
}
