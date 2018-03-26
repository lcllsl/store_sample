<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id')->comment('主键id');
            $table->string('gname',50)->comment('商品名');
            $table->string('gimg',150)->comment('商品图');
            $table->Integer('gstock')->comment('商品库存');
            $table->tinyInteger('issale')->default(1)->comment('是否打折');
            $table->tinyInteger('iskill')->default(1)->comment('是否删除');
            $table->tinyInteger('isbest')->default(0)->comment('是否精品');
            $table->tinyInteger('ishot')->default(0)->comment('是否热销');
            $table->tinyInteger('isnew')->default(0)->comment('是否新品');
            $table->integer('cateid')->comment('所属类别');
            $table->integer('brandid')->comment('品牌id');
            $table->text('gdesc')->comment('商品描述');
            $table->integer('visitnum')->default(0)->comment('访问量');
            $table->integer('salenum')->default(0)->comment('销售量');
            $table->integer('appraisenum')->default(0)->comment('评价数');
            $table->string('gcolor')->comment('颜色');
            $table->string('gsize')->comment('尺码');
            
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
        Schema::drop('goods');
    }
}
