<?php
/**
 * Created by PhpStorm.
 * User: jdabricot
 * Date: 17/01/18
 * Time: 14:32
 */

class Comments{
    private $content;
    private $commentDate;

    public function __construct($content)
    {
        $this->content = $content;
        $this->commentDate = date('Y-m-d H:i:s');
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return false|string
     */
    public function getCommentDate()
    {
        return $this->commentDate;
    }

    /**
     * @param false|string $commentDate
     */
    public function setCommentDate($commentDate)
    {
        $this->commentDate = $commentDate;
    }
}