<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call('product');
    }
}
class user extends Seeder{
	public function run()
	{
		DB::table('users')->insert([
			['name'=>'Nguyễn Viết Toàn','email'=>'toankrb95@gmail.com','password'=>bcrypt('toan70211')],
			['name'=>'Nguyễn Viết Toàn','email'=>'nothing@gmail.com','password'=>bcrypt('nothing')],
			['name'=>'Nguyễn Viết Toàn','email'=>'everything@gmail.com','password'=>bcrypt('everything')]
			]);
	}
}
class theloai extends Seeder
{
	public function run()
	{
		DB::table('theloai')->insert([
			['theloai'=>'phim'],
			['theloai'=>'tin tức'],
			['theloai'=>'sách'],
			['theloai'=>'shows'],
			['theloai'=>'game'],
			
		]);
	}
}
class loaitin extends Seeder
{
	public function run()
	{
		DB::table('loaitin')->insert([
			['id_theloai'=>'1','loaitin'=>'khoa học viễn tưởng'],
			['id_theloai'=>'1','loaitin'=>'hành động '],
			['id_theloai'=>'1','loaitin'=>'tài liệu'],
			['id_theloai'=>'1','loaitin'=>'truyền thuyết'],
			['id_theloai'=>'2','loaitin'=>'trong nước'],
			['id_theloai'=>'2','loaitin'=>'quốc tế '],
			['id_theloai'=>'2','loaitin'=>'khoa học'],
			['id_theloai'=>'2','loaitin'=>'đời sống'],
			['id_theloai'=>'3','loaitin'=>'thiếu nhi'],
			['id_theloai'=>'3','loaitin'=>'anh văn'],
			['id_theloai'=>'3','loaitin'=>'ngôn tình'],
			['id_theloai'=>'3','loaitin'=>'truyện cười'],
			['id_theloai'=>'4','loaitin'=>'VN Nexttop Models'],
			['id_theloai'=>'4','loaitin'=>'The Face '],
			['id_theloai'=>'4','loaitin'=>'The Voice'],
			['id_theloai'=>'4','loaitin'=>'VN Idol'],
			['id_theloai'=>'5','loaitin'=>'LOL'],
			['id_theloai'=>'5','loaitin'=>'Dota'],
			['id_theloai'=>'5','loaitin'=>'Đế chế'],
			['id_theloai'=>'5','loaitin'=>'Ra 3'],
		]);
	}
}
class ten extends Seeder
{
	public function run()
	{
		DB::table('ten')->insert([
			['id_loaitin'=>'1','ten'=>'Iron Man'],
			['id_loaitin'=>'1','ten'=>'Spider Man'],
			['id_loaitin'=>'2','ten'=>'Lý tiểu Long'],
			['id_loaitin'=>'2','ten'=>'Kingman'],
			['id_loaitin'=>'3','ten'=>'Nguyễn sinh Cung'],
			['id_loaitin'=>'3','ten'=>'Lô TÔ'],
			['id_loaitin'=>'4','ten'=>'Tây Du Ký'],
			['id_loaitin'=>'4','ten'=>'Bát Tiên'],
			['id_loaitin'=>'5','ten'=>'Bão Số 10'],
			['id_loaitin'=>'5','ten'=>'Chó Thả Rông'],
			['id_loaitin'=>'6','ten'=>'Triều Tiên'],
			['id_loaitin'=>'6','ten'=>'ISIS'],
			['id_loaitin'=>'7','ten'=>'Sao Hỏa'],
			['id_loaitin'=>'7','ten'=>'Tế Bào'],
			['id_loaitin'=>'8','ten'=>'Thực phẩm bẩn'],
			['id_loaitin'=>'8','ten'=>'Nắng nóng'],
			['id_loaitin'=>'9','ten'=>'Cáo Và THỏ'],
			['id_loaitin'=>'9','ten'=>'Em bé quàng khăn đỏ'],
			['id_loaitin'=>'10','ten'=>'TOEIC'],
			['id_loaitin'=>'10','ten'=>'IELTS'],
			['id_loaitin'=>'11','ten'=>'NGôn tình 1'],
			['id_loaitin'=>'11','ten'=>'Ngôn tình 2'],
			['id_loaitin'=>'12','ten'=>'TRạng Quỳnh'],
			['id_loaitin'=>'12','ten'=>'Thần Đồng Đất Việt'],
			['id_loaitin'=>'13','ten'=>'All Stars'],
			['id_loaitin'=>'13','ten'=>'Cao Ngân'],
			['id_loaitin'=>'14','ten'=>'Mai Ngô'],
			['id_loaitin'=>'14','ten'=>'Tú Hảo'],
			['id_loaitin'=>'15','ten'=>'Vũ Các Tường'],
			['id_loaitin'=>'15','ten'=>'Hồ Ngọc Hà'],
			['id_loaitin'=>'16','ten'=>'TRọng Hiếu'],
			['id_loaitin'=>'16','ten'=>'Siu Black'],
			['id_loaitin'=>'17','ten'=>'LOL1'],
			['id_loaitin'=>'17','ten'=>'LOL2'],
			['id_loaitin'=>'18','ten'=>'DOTA!'],
			['id_loaitin'=>'18','ten'=>'DOTA2'],
			['id_loaitin'=>'19','ten'=>'ĐÉ CHẾ 1'],
			['id_loaitin'=>'19','ten'=>'ĐẾ CHÊ 2'],
			['id_loaitin'=>'20','ten'=>'RA 31'],
			['id_loaitin'=>'20','ten'=>'RA 32'],
		]);
	}
}
class product extends Seeder
{
	public function run(){
	DB::table('product')->insert([
		['Name'=>'Tin tức','Category_Parent'=>'None','Status'=>'Hiện'],
		['Name'=>'Bóng đá','Category_Parent'=>'Thể thao','Status'=>'Hiện'],
		['Name'=>'Phim','Category_Parent'=>'Giải trí','Status'=>'Hiện'],
		['Name'=>'Sách','Category_Parent'=>'Kiến thức','Status'=>'Hiện'],
		['Name'=>'Video','Category_Parent'=>'Giải trí','Status'=>'Hiện'],
		['Name'=>'Truyện cười','Category_Parent'=>'Giải trí','Status'=>'Hiện'],
		['Name'=>'Bóng chuyền','Category_Parent'=>'Thể thao','Status'=>'Hiện'],
		['Name'=>'The Face','Category_Parent'=>'Giải trí','Status'=>'Hiện'],
		['Name'=>'The Voice','Category_Parent'=>'Giải trí','Status'=>'Hiện'],
		['Name'=>'Game','Category_Parent'=>'None','Status'=>'Hiện'],
		['Name'=>'Đố Vui','Category_Parent'=>'Giải trí','Status'=>'Hiện'],
		['Name'=>'Cầu lông','Category_Parent'=>'Thể thao','Status'=>'Hiện'],
		['Name'=>'Bóng rổ','Category_Parent'=>'Thể thao','Status'=>'Hiện'],
		['Name'=>'VNNT Model','Category_Parent'=>'Giải trí','Status'=>'Hiện'],
		['Name'=>'VN Idol','Category_Parent'=>'Giải trí','Status'=>'Hiện'],
		['Name'=>'Mua sắm','Category_Parent'=>'Giải trí','Status'=>'Hiện'],
		['Name'=>'Sudoku','Category_Parent'=>'Thể thao','Status'=>'Hiện'],
		['Name'=>'Chọi trâu','Category_Parent'=>'Giải trí','Status'=>'Hiện'],
		['Name'=>'Hoạt hình','Category_Parent'=>'Giải trí','Status'=>'Hiện'],
		['Name'=>'Du lịch','Category_Parent'=>'Giải trí','Status'=>'Hiện'],
		['Name'=>'Tham quan','Category_Parent'=>'Giải trí','Status'=>'Hiện'],
		['Name'=>'Giải đề','Category_Parent'=>'Kiến thức','Status'=>'Hiện'],
		['Name'=>'Ôn thi','Category_Parent'=>'Kiến thức','Status'=>'Hiện'],
		['Name'=>'Anh văn','Category_Parent'=>'Kiến thức','Status'=>'Hiện'],
		
	]);
}
}

