<?php
class Alerts
{
    private $success = 'success';
    private $warning = 'warning';
    private $error = 'error';
    private $info = 'info';
    private $content = null;
    private function msgbody($class, $msg)
    {
        return "<div class=\"notice notice-$class is-dismissible\"><p><strong>$msg</strong></p></div>";
    }
    private function show_message($content)
    {
         $this->content = $content;
        // add_action('init', function () {
        //     add_action('admin_notices', function () {
                echo $this->content;
        //     });
        // });
    }
    public function secusses_save(): void
    {
        $message = 'اطلاعات با موفقیت ذخیره شد';
        $class = $this->success;
        $MessageContent = $this->msgbody($class, $message);
        $this->show_message($MessageContent);
    }
    public function fail_save(): void
    {
        $message = 'اوه مشکلی در ذخیره اطلاعات به وجود آمد';
        $class = $this->error;
        $MessageContent = $this->msgbody($class, $message);
        $this->show_message($MessageContent);
    }
    public function give_secusses($message): void
    {
        $class = $this->success;
        $MessageContent = $this->msgbody($class, $message);
        $this->show_message($MessageContent);
    }
    public function give_info($message): void
    {
        $class = $this->info;
        $MessageContent = $this->msgbody($class, $message);
        $this->show_message($MessageContent);
    }
    public function give_warning($message): void
    {
        $class = $this->warning;
        $MessageContent = $this->msgbody($class, $message);
        $this->show_message($MessageContent);
    }
    public function give_error($message): void
    {
        $class = $this->error;
        $MessageContent = $this->msgbody($class, $message);
        $this->show_message($MessageContent);
    }
    public function custom_message($message, $class): void
    {
        $MessageContent = $this->msgbody($class, $message);
        $this->show_message($MessageContent);
    }
}