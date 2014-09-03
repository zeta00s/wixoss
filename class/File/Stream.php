<?php

class File_Stream
{
    /**
     * cURLを使ってファイルの内容を文字列に読み込む
     * @param string $filename データを読み込みたいファイルの名前
     * @return string 読み込んだデータ
     */
    public static function getContents($filename)
    {
        $conn = curl_init();
        curl_setopt($conn, CURLOPT_URL, $filename);
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($conn);
        curl_close($conn);
        return $result;
    }
}