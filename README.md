#wixoss
  
WIXOSS Database &amp; Simulator  
  
  
  
##ToDo
名前空間がわからん  
  
  
  
##命名規則のような何か
ちなみにときどきミスっている。  
  
#### クラスのファイル名
Hoge.php  
* PascalCase
  
#### クラス名
class Foo_Bar_Hoge  
 (Foo/Bar/Hoge.php の場合)  
* PSR-0に従う? (ディレクトリからのパスに対応, 区切り文字はアンダースコア)
  
#### インターフェイス名
HogeInterface  
* 未定
  
#### 関数名
private function addValue()  
final public static function isValid($foo, $bar = 0)  
* camelCaps
* 動詞または is から始める
* クラスのメンバで private のときは、関数名の最初にアンダースコア1文字をつける
    * (protected は未定)
  
#### 変数名
private $str;  
private $_original_value;  
* snake_case
* クラスのメンバで private のときは、変数名の最初にアンダースコア1文字をつける
    * (protected は未定)
  
#### 配列名
private $costs;  
* snake_case
* 複数形にする、もしくは末尾に _array をつける?
* 連想配列のキーも snake_case
  
#### 定数名
const FORM_WIDTH = 150;  
* 全て大文字, 単語間はアンダースコアで区切る
  
#### その他の名前以外の規則
全般  
* 開始タグは <?php に限定
* クラスファイルは終了タグをつけてはいけない
* 文字コードは UTF-8
* インデントは空白4つ
  
詳細  
* 基本的にわかりやすい名前をつけること、省略しすぎは禁止
* カンマの後ろは空白を1文字つける
* クォーテーションは変数展開しない限りシングルクォーテーション
  
クラス内部について  
* 全ての変数と関数は private, protected, public を明示
    * クラス内の変数は public 禁止
* 変数は全てコンストラクタの中で初期化したい、なんとなく
  
  
以下のコーディング規約を参考にしました。  
上記で明示的に違反させている場合を除いて、記載していない細かい部分はこれのどっちかに従うはずです。
競合してない限り。おそらく。  
Symfony2  
http://docs.symfony.gr.jp/symfony2/contributing/code/standards.html  
Zend Framework  
http://framework.zend.com/manual/1.12/ja/coding-standard.naming-conventions.html  
  
  
参考) if文の雛形  
<code>  
if (str == 'one') {  
    // 処理  
} elseif (str == 1) {  
    // 処理  
} else {  
    // 処理  
}  
  
if (!foo) { bar = 123; }  
</code>
  
