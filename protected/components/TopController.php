    <?php
class TopController extends Controller{
    //该数组只能追加，不能做其他任何修改
    public $cate = array(
        1=>"微商",
        2=>"互粉群",
        3=>"招代理商",
        4=>"赚钱大咖",
        5=>"创业群",
        6=>"代理品牌",
        7=>"兼职群",
        8=>"公众号开发",
        9=>"微营销",
        10=>"萌宠",
        11=>"摄影群",
        12=>"旅游",
        13=>"运动",
        14=>"购物",
        15=>"母婴群",
        16=>"汽车",
        17=>"美食",
        18=>"淘宝优惠券",
        19=>"宝妈群",
        20=>"粉丝互动",
        21=>"时尚交友",
        22=>"美女模特",
        23=>"互赞群",
        24=>"驴友群",
        25=>"车友群",
        26=>"吃喝玩乐",
        27=>"交朋友",
        28=>"影视娱乐",
        29=>"爱音乐",
        30=>"动漫娱乐",
        31=>"明星八卦",
        32=>"全民K歌群",
        33=>"众筹",
        34=>"手游群",
        35=>"网游群",
        36=>"英雄联盟群",
        37=>"王者荣耀群",
        38=>"斗地主群",
        39=>"麻将群",
        40=>"微信投票群",
        41=>"富婆群",
        42=>"土豪群",
        43=>"股票交流群",
        44=>"投资交流群",
        45=>"美女直播",
        46=>"闲聊群",
        47=>"8090",
        48=>"职业群",
        49=>"人脉群",
        50=>"网络红人",
        0=>"其他"
    );
    public $c_cate = array(
        "微信商家"=>array(
            1=>"微商",
            2=>"互粉群",
            3=>"招代理商",
            4=>"赚钱大咖",
            5=>"创业群",
            6=>"代理品牌",
            7=>"兼职群",
            8=>"公众号开发",
            9=>"微营销",
        ),
        "生活购物"=>array(
            10=>"萌宠",
            11=>"摄影群",
            12=>"旅游",
            13=>"运动",
            14=>"购物",
            15=>"母婴群",
            16=>"汽车",
            17=>"美食",
            18=>"淘宝优惠券",
            19=>"宝妈群",
        ),
        "互粉交友"=>array(
            20=>"粉丝互动",
            21=>"时尚交友",
            22=>"美女模特",
            23=>"互赞群",
            24=>"驴友群",
            25=>"车友群",
            26=>"吃喝玩乐",
            27=>"交朋友",
        ),
        "互动玩乐"=>array(
            28=>"影视娱乐",
            29=>"爱音乐",
            30=>"动漫娱乐",
            31=>"明星八卦",
            32=>"全民K歌群",
            33=>"众筹",
            34=>"手游群",
            35=>"网游群",
            36=>"英雄联盟群",
            37=>"王者荣耀群",
            38=>"斗地主群",
            39=>"麻将群",
        ),
        "微信交流"=>array(
            40=>"微信投票群",
            41=>"富婆群",
            42=>"土豪群",
            43=>"股票交流群",
            44=>"投资交流群",
            45=>"美女直播",
            46=>"闲聊群",
        ),
        "其他社区"=>array(
            47=>"8090",
            48=>"职业群",
            49=>"人脉群",
            50=>"网络红人",
            //0=>"其他"
        ),
    );
	public function init(){
		parent::init();
		/*
		Yii::app()->user->setState('themes',"classic");
		if(isset(Yii::app()->user->themes) && Yii::app()->user->$themes=="classic"){
            //重新设置主题路径
            Yii::app()->themeManager->setBasePath(Yii::app()->basePath. "/themes");
            Yii::app()->theme =Yii::app()->user->themes;
            
            // 发布 当前主题 的 views 目录下的资源文件
            if (!empty($this->module) && isset($this->module->id)){
                //重新设置布局路径

                Yii::app()->setLayoutPath( Yii::app()->theme->viewPath .DIRECTORY_SEPARATOR."layouts");
                
                //发布样式
                $folder = Yii::app()->layoutPath . "/assets";
                $this->publish("theme",$folder);
            }    
        }
        */
	}
}

?>