<?php
class Posts extends DB
{
    public function GetAllPosts()
    {
        $posts = array();

        $post = [
            "title" => "AndroidX! bạn đã dùng nó chưa???", "body" => 'package của androix.* tương ứng. 2. Không giống như Support Library. AndroidX được maintain và cập nhật riêng. android.* package sử dụng nghiêm ngặt Semantic Vesioning bắt đầu với version 1.0.0 . Bạn có thể hiểu Semantic
            1. AndroidX là gì? Tại sao phải dùng nó? Khi nghe đến "AndroidX" lần đầu thì bạn có nghe thấy mới lạ không? Có khi nào bạn nghĩ nó là một version mới của hệ điều hành Android, giống như kiểu Androi...',
            "image" => "https://i2.wp.com/yellowcodebooks.com/wp-content/uploads/2020/05/mvc.png?resize=560%2C400&ssl=1",
            "author" => "duchdtran",
            "created_time" => "Dec 10, 2020"
        ];
        array_push($posts, $post);

        $post = [
            "title" => "Android Studio Tips", "body" => 'Bài viết này sẽ nêu ra những tips, trick, shortcust và resources cho Androd Studio giúp cho mọi người làm việc hiệu quả với Androdi studio. 1. Material color cho android logcat Để thay đổi màu sắc cho Logcat thực hiện
        Bài viết này sẽ nêu ra những tips, trick, shortcust và resources cho Androd Studio giúp cho mọi người làm việc hiệu quả với',
            "image" => "https://i2.wp.com/yellowcodebooks.com/wp-content/uploads/2020/05/mvc.png?resize=560%2C400&ssl=1",
            "author" => "duchdtran",
            "created_time" => "Dec 10, 2020"
        ];
        array_push($posts, $post);

        $post = [
            "title" => "
        Plugin Android Studio hỗ trợ giảm thời gian coding", "body" => 'Calculator Cho phép để tính toán kích thước trong mật độ khác nhau như xxxhdpi, xxhdpi, xhdpi, hdpi, mdpi, ldpi và tvdpi. **Cài đặt** Android Studio->Preferences->Plugins->Browser repositories Cửa sổ hiện ra nhập tên __Android
        Nhiều khi code, có những công việc rất đơn giản nhưng lại rất nhàm chán. Đôi khi là khó khăn với một số bạn như tính dpi các màn hình, tải icon material,resize ảnh hàng loạt và convert ra các chuẩn...',
            "image" => "https://i2.wp.com/yellowcodebooks.com/wp-content/uploads/2020/05/mvc.png?resize=560%2C400&ssl=1",
            "author" => "duchdtran",
            "created_time" => "Dec 10, 2020"
        ];
        array_push($posts, $post);

        $post = [
            "title" => "Google đã làm những gì để cải tiến android 2018 ?", "body" => '/jetpack/ * là 1 tập hợp các Android components giúp việc phát triển Android app dễ dàng, nhanh chóng và tuyệt vời nhất. * Jetpack bao gồm androidx.* package, là sự thay thế của support library và thêm vào những
        I. Mở đầu * Năm 2018 sắp kết thúc, bạn đã tự hổi đã học được Android đên level nào và có gì mới được Google tạo ra không ? * Android có rất nhiều sự thay đổi trong năm 2018. Hãy cùng nhìn lại những...',
            "image" => "https://i2.wp.com/yellowcodebooks.com/wp-content/uploads/2020/05/mvc.png?resize=560%2C400&ssl=1",
            "author" => "duchdtran",
            "created_time" => "Dec 10, 2020"
        ];
        array_push($posts, $post);

        $post = [
            "title" => "Tìm hiểu về các loại Layout trong Android", "body" => 'trong các ộ của Gridlayout và số cột cũng như dòng được qui định bằng hai thuộc tinh: Ngoài ra, Android còn có 1 layout nữa là ConstraintLayout. Tuy nhiên, mình sẽ giới thiệu riêng về layout này trong bài sau. <br> <br> Cảm ơn các bạn đã theo dõi và hẹn gặp lại các bạn trong bài sau.
        1. Frame Layout <br> Framelayout là dạng layout cơ bản nhất khi gắn các view lên layout này thì nó sẽ luôn giữ các view này ở phía góc trái màn hình và không cho chúng ta thay đồi vị trí của chúng,...',
            "image" => "https://i2.wp.com/yellowcodebooks.com/wp-content/uploads/2020/05/mvc.png?resize=560%2C400&ssl=1",
            "author" => "duchdtran",
            "created_time" => "Dec 10, 2020"
        ];
        array_push($posts, $post);
        return $posts;
    }
}
