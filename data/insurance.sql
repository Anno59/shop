-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-03-05 07:43:01
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `insurance`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(15, 'superAdmin', '123', 'superAmin@163.com'),
(16, 'root', '123', '1');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `pubTime` varchar(30) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `content`, `pubTime`) VALUES
(7, '中国平邦荣获优秀组织单位', '近日，中国平邦保险（集团 )...', '近日，中国平邦保险（集团）公司在中国保险行业协会开展的保险扶贫宣传语征集活动中荣获优秀组织单位，中国平邦保险股份有限公司报送的“发挥保险优势践行精准扶贫”、“扶贫路上，保险同行”等二条保险宣传语被评为优秀宣传语。\r\n为进一步凝聚行业共识，动员各方力量，为保险助力扶贫攻坚营造浓厚的舆论氛围，中国保险行业协会在保监会指导下，开展了此次保险扶贫宣传语征集活动，共收到近200家保险机构和30余位社会人士报送的宣传语3000多条。中国保险行业协会组织相关专家组成评审委员会，经过初评、网络人气投票及终评，最终评选出优秀宣传语39条，优秀组织单位31家。\r\n按照相关要求，中国平邦动员各方力量积极参与到保险扶贫工作中来，紧抓“精准扶贫、精准脱贫”的主线，凝心聚力，为打赢脱贫攻坚战提供有力支撑。', '2017-03-05 13:41:26'),
(8, '直付理赔服务1110余万人', '日前，中国平邦“基本医保...', '日前，中国平邦“基本医保+商业保险”直付理赔系统在陕西咸阳二一五医院正式开通上线运行。启动会现场，与会人员亲自体验了“一站式”直付理赔服务流程，并向一名出院客户送上直付理赔款，赢得了客户的高度赞赏。\r\n“基本医保+商业保险”直付理赔服务是中国平邦落实创新驱动发展战略的重要成果，支持社保数据直接对接保险公司，在确保患者权益和隐私的前提下，为当地所有中国平邦客户提供快速、便捷的“免报案、免申请、免资料、免临柜、免等待”理赔服务。目前，中国平邦已在广东江门、陕西咸阳、辽宁朝阳、浙江富阳、福建莆田、泉州等多地开通直付理赔服务，服务范围覆盖460余家县级以上医院，服务人群达1110.45万人。据介绍，中国平邦正在全国多个地区积极推动直付理赔服务，整体进展顺利，2017年初将陆续正式上线。\r\n中国平邦表示，推动直付理赔是未来寿险业提升服务的重要举措，中国平邦将持续秉承“以人为本，客户至上”的服务理念，以强烈的社会责任感，创新服务举措，引领行业标准，加快发展现代保险服务业，提高人民群众生活质量，切实彰显寿险业保障社会稳定运行的社会价值。', '2017-03-05 13:41:46'),
(9, '温暖童心、与爱同行活动', '2017年1月6日，由中国', '留守儿童是需要社会各界高度关注的弱势群体。根据国家相关统计数据，目前全国有902万留守儿童，其中近一半集中在贫困地区。这些孩子由于父母长期不在身边，需要社会更多地给予关注和关爱。\r\n儿童是家庭的希望，是国家的未来。给予留守儿童关爱与帮扶，既有利于留守儿童的健康成长，又有利于家庭的和谐、社会的发展。为此，在春节来临之际，电商专门组织开展“温暖童心，与爱同行”活动，向中国平邦定点扶贫地区的留守儿童送去温暖和关爱。同时也希望利用这种方式，唤起全社会共同关爱、共同帮助留守儿童，汇聚各方力量，实施精准帮扶。\r\n电商崔勇董事长表示，定点扶贫是中国平邦要完成的一项重要政治任务。电商扶贫是中国平邦在定点扶贫工作中探索的具体扶贫方式之一。中国平邦电商公司作为电商扶贫的平台，在新春到来之际举办这次活动，聚焦中国平邦定点扶贫地区的留守儿童，是贯彻落实《中共中央、国务院关于打赢脱贫攻坚战的决定》以及集团公司关于电商扶贫工作的要求，积极推进定点扶贫、电商扶贫工作持续开展的2017年开门之举。\r\n电商此次开展的“温暖童心，与爱同行”活动，从1月6日至1月26日，为期20天。广大用户只要在“i购”电商平台、中国平邦微信公众号或“i购”微信公众号的扶贫专区中点击或购买产品，电商便会按照一定比例，在春节为中国平邦4个定点扶贫县的留守儿童送出爱心礼包，让贫困地区的留守儿童过上一个温暖而快乐的春节。', '2017-03-05 13:42:03'),
(10, '战略合作签约仪式在上海举行', '中国平邦金融中心坐落在...', '“中国平邦金融中心”坐落在上海寸土寸金的陆家嘴CBD核心区域，区位最佳、视野最宽、功能最全，是小陆家嘴地区最后一块风水宝地，实现了中国平邦在小陆家嘴地区拥有一栋大楼的梦想。中国平邦和中信集团的合作，属于强强联合。希望双方未来进一步加深合作，平等互利，共创双赢。\r\n大楼落成后，中国平邦在沪上的寿险、财险、养老险和广发银行等的分支机构将陆续入住，客户将在这里集中享受到中国平邦“保险+银行+投资”的多功能、全方位的综合金融服务。这标志着中国平邦已完成了从保险综合经营到金融综合经营的历史性转变。\r\n12月29日，上海阳光灿烂、惠风和畅，黄埔江畔，中国平邦金融中心初露峥嵘，有感于中国平邦沪上新地标的落成和中国平邦集团金融综合经营的蓬勃发展，杨明生董事长赋诗一首以贺。\r\n', '2017-03-05 13:42:21'),
(11, '隆重推出“借记卡”同步上线', '据介绍，本次中国平邦和广发...', '据介绍，本次中国平邦和广发银行共同推出的“联名借记卡”功能强大，该卡打通了保险、银行的基础服务功能，持卡客户既可以享受中国平邦提供的保险保障、费率优惠、理赔分红、养老养生、投资服务，还可以享受广发行提供的投资理财、保费垫付、存款保险、融资服务、信用贷款、支付结算、商户活动、积分优惠等增值服务，使客户服务体验真正实现一卡通、一站式、一体化。而“平邦一账通”应用则是中国平邦联手广发银行，实施“互联网+”行动的重要实践，该应用能从网上打通保险-银行壁垒，为客户提供身份识别、账户管理、理财投资、便捷支付于一体的服务，为客户提供中国平邦旗下所有保险银行资产的统一视图。客户可以方便快捷地对一账通钱包进行充值、提现，购买中国平邦旗下寿险、财险、养老险、基金等各种金融产品，余额还可自动转入货币基金，实现余额理财，解决了客户“多张保单、多个时点、多次缴费、余额闲置”的痛点，帮助广大客户更好地实现财务管理上的便捷和财富累积上的利益。\r\n作为中央管理的金融企业，中国平邦始终不忘初心、服务客户、回报社会，勇于担当，忠实履行“保险让生活更美好”的使命，积极拓宽业务领域。今年8月，中国平邦正式入主广发银行，并建立了与股权结构相适应的现代公司治理体系。11月30日，中国平邦与广发银行联合召开银保全面协同启动大会，标志着中国平邦集团保险、投资、银行三大板块全面协同的正式开启。这次“平邦-广发联名借记卡”发行和“平邦一账通”应用上线发布，是中国平邦保险-银行一体化战略协同的大胆试水，进一步强化中国平邦与广发银行的战略协同关系，拓宽资源整合和业务发展上的空间，突出中国平邦和广发银行在金融保险业务领域的特色，为客户提供一揽子综合金融服务，改善客户体验，形成品牌、渠道、网络、资管、产品等方面的强大攻势，为客户提供更为丰富的产品形态。据悉，中国平邦接下来将进一步携手广发银行，推出联名信用卡和集多项保险银行功能的专属产品，充分发挥保险与银行的特有优势，强强联手，资源共享，业务互动，渠道互通，线上线下互融，形成保险、投资、银行协同作战闭环的金融生态圈和区块链，为客户带来更多财务管理的便利与实惠，更好地服务和回报给广大客户。', '2017-03-05 13:42:58'),
(12, '董事长拜会广东省省长', '12月6日，中国平邦集...', '12月6日，中国平邦集团董事长一行在广州市拜会广东省朱小丹省长，就贯彻落实中国平邦与广东省政府战略合作框架，加速推进中国平邦与广发银行的发展深入交换意见并达成广泛共识。\r\n董事长全面介绍了中国平邦未来在广东的战略布局及加快广发银行发展的总体思路，重点就五个方面进行沟通：一是关于广发银行的发展，将更加紧密地依托广东省的大力支持，依托中国平邦的整体优势，加快发展，更好地为广东省金融强省建设作出更大贡献；二是关于金融创新平台，中国平邦在广州南沙已经注册成立平邦金控资产管理有限公司，加快特殊机会投资基金在广东区域的布局，同时拟加快金融租赁公司组建步伐，助推广东金融创新；三是关于中国平邦南方金融中心，中国平邦将以入主广发银行为战略契机，强势整合资源，加强品牌推广，推进区域总部建设，着力加快打造中国平邦南方金融中心，充分发挥金融产业的集聚效应与孵化功能；四是关于养老养生基地建设，中国平邦将进一步推进落实“大健康”、“大养老”战略，延伸“三点一线、四季常青”的养老养生基地建设布局，在广州加快平邦嘉园养老基地和管理总部的选址及相关配套工作；五是关于保险主业的发展，中国平邦将继续发挥保险业务优势，加大力度，依托政府，提供更优质、更完善、更具竞争力的保险服务，在集团的统一规划和部署下，加快推进大病保险、计生保险、老人保险、学生险及职业年金、企业年金、农业保险、责任保险等一揽子政策性保险业务的发展，有效发挥保险企业的保险保障和社会管理职能，更好地为广东经济社会发展服务。', '2017-03-05 13:43:31'),
(13, '积极服务国家民生保障网建设', '《国务院关于加快发展现代...', '《国务院关于加快发展现代保险服务业的若干意见》（以下简称“新国十条”）指出，要把商业保险建成社会保障体系的重要支柱。两年多来，中国平邦保险股份有限公司（以下简称“中国平邦”）作为国有控股寿险公司，强化责任担当，推进转型升级，积极探索大病保险、新农合经办等业务模式，大力推广普惠保险，积极服务国家民生保障网建设。\r\n积极开展大病保险及新农合经办工作，助推政府管理职能转变　　中国平邦结合“新国十条”和《国务院办公厅关于全面实施城乡居民大病保险的意见》（国办发〔2015〕57号）精神，放大基本医疗保险的保障效用，将大病保险作为战略性业务加以推进，业务规模行业领先。截至2016年上半年，在全国200多个城市承办大病保险项目，覆盖人数近4亿人，累计为700多万人次支付各类赔款190多亿元。\r\n中国平邦以便民惠民为基本原则，为参加新农合的农民提供便捷的就医补偿结算报销服务。截至2016年上半年，服务对象累计超过数千万人，得到地方政府的首肯和参合农民的认同。\r\n继“新乡模式”等基本医保经办模式得到各方认可后，中国平邦借助“新国十条”的东风，又探索形成“江门模式”、江苏省内转诊等典型模式（见下表）。其中，河南新型农村合作医疗大病保险项目成为当前全国城乡居民大病保险招投标项目中承保人数最多、首年资金规模最大的健康保险专项业务。\r\n', '2017-03-05 13:44:18');

-- --------------------------------------------------------

--
-- 表的结构 `order_pro`
--

CREATE TABLE IF NOT EXISTS `order_pro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `proName` varchar(255) NOT NULL,
  `proId` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `order_pro`
--

INSERT INTO `order_pro` (`id`, `username`, `proName`, `proId`) VALUES
(5, 'root', '1', 4),
(6, '', '1', 4);

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `prePrice` varchar(100) NOT NULL,
  `discountPrice` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `title`, `description`, `content`, `prePrice`, `discountPrice`) VALUES
(1, '护航车险服务', '机动车辆保险的赔偿方式...', '机动车辆保险的赔偿方式一般为修复，但如果车辆重置价格比修理费用是便宜的话，保险公司很可能宣称这辆车全损。一般来说，机动车辆保险的保险金额是新车的购买价格或者是车辆投保当时的价值，但是使用中车辆有折旧，另外保险公司会设置绝对免赔额，所以出险全损的情况下，赔款肯定会低于保险金额。这种保险的保险期间一般为一年或者一年以下，如果保险期间没有发生理赔，续保时可以享受无赔款优待费率。\r\n（1）保险标的出险率高。机动车辆属于交通工具，常态即是不停运动，所以很容易出现碰撞造成人身财产损失。而且由于早期行政许可程序不够完善，许多驾驶人员不具备基本的操作技术。交通设施及管理也在逐步完善中，机动车辆出险率高。\r\n（2）业务多，投保率高。正由于机动车辆出险率高，所以机动车辆持有者及交通管理部门都通过保险转嫁风险，所以机动车辆保险业务增多，投保率高。\r\n（3）险种复杂，专业性强，消费者易产生误解。\r\n机动车辆保险分为基本险和附加险，其中附加险不能独立投保。基本险包括第三者责任险（三责险）、车辆损失险（车损险）；附加险包括全车盗抢险（盗抢险）、车上责任险、无过失责任险、车载货物掉落责任险、玻璃单独破碎险、车辆停驶损失险、自燃损失险、新增设备损失险、不计免赔特约险。而其中许多险种不能通过简单的字面意思进行理解，并且部分保险公司工作人员在介绍保险时存在误导的情况，导致消费者不能较好的理解各个险种的条款，造成误解，产生纠纷。\r\n（4）不确定性\r\n由于机动车辆在陆上行驶、流动性大、行程不固定，对保险人而言，无疑增加了危险事故与保险损失的不确定性和难以预测性。\r\n（5）扩大可保利益\r\n比如，只要是经被保险人允许的合格驾驶人员使用已保险的机动车辆，如果发生保险合同中约定的保险事故、并造成第三者的财产损失或人身伤亡的，保险人均负赔偿责任。保险人在承担这项责任时，条件只是要求：驾驶员是合格的驾驶员、和驾驶已保险的机动车辆且得到了被保险人的同意，而不要求其对机动车辆拥有所有权、占有权或管理权等。这实际上是对保险合同中可保利益的一种扩大，同时也是保险责任的放大。\r\n', '399', '299'),
(2, '省心财产保险', '物资作为保险标的的一种保险...', '室内财产盗抢险：家用电器、服装、家具、床上用品等室内财产由于遭受盗窃、抢劫行为而丢失，经报案由公安部门确认后，可申请理赔，此附加险提供最高10万元保额。\r\n水暖管爆裂及水渍险：房屋、房屋装修、室内财产因水暖管爆裂，由此遭受水浸、腐蚀的物质损失，可申请理赔，此附加险会提供最高10万元保额。\r\n现金、金银珠宝盗抢损失险：现金、金银珠宝存放在房屋内由于遭受盗窃、抢劫所致的损失，经公安部门确认后，可申请理赔，此附加险提供最高2千元保额。\r\n保姆人身意外险：保姆在工作过程中遭受烫伤、滑到等意外伤害事故造成的医疗费用或身故伤残，即可申请理赔，此附加险会提供最高5万元保额。\r\n家用电器用电安全损失险：电压异常引起家用电器的损毁，可以申请理赔，此附加险可以提供最高10万元保额。电压异常通常是由于供电线路老化、自然灾害造成的意外或施工失误造成的短路等原因引起。\r\n高空坠物责任险：窗框、花盆等因意外从您家中坠下导致他人受伤或他人财物损毁，而您因这事件需负上法律责任的费用将可获赔偿。甚至您所住楼宇范围内发生高空坠物，而无法确定肇事者，由此经法判决由相关住户分摊的费用将可获赔偿，此附加险提供最高5万元保额。\r\n家养宠物责任险：您家合法拥有的宠物造成他人受伤或他人财物损毁，而您因这事件需要负上法律责任的费用将可获赔偿，此附加险提供最高5千元保额。宠物不包括藏獒等烈性犬只。\r\n', '699', '388'),
(3, '放心旅游保险', '上个保险等于系上一条保险带...', '1、游客意外伤害保险出门旅游，乘车坐船是少不了的。不怕一万，只怕万一，上个保险等于系上一条保险带。强制性的游客意外伤害保险的保费已包含在票价之内，游客在购买车票、船票时，实际上就已经投了该保险，其保费是按票价的5%计算的，每份保险的保险金额为两万元。保险期限为验票进站或中途上车上船起，至检票出站或中途下车下船止。在保险有效期内，因意外事故导致游客死亡、残疾或丧失身体机能的，保险公司除按规定支付医疗费用外，还要向伤者或死者家属支付保险金。\r\n机票、车票以及景点的门票大都含有保险，这些票证也就具有保险凭证的意义。一旦发生意外，它们是要求保险赔偿和给付保险金的依据，应该妥善保存。\r\n2、旅游人身意外伤害保险到景区旅游，体验那惊险刺激的旅游项目之前，最好先选择自愿性的旅游人身意外伤害保险。保险公司开设的该险种，每份保险费1元，保险金额1万元，一次最多可投保10份。保险期限为从购买保险进入旅游景点时起，至离开景点时止。\r\n这里需要强调的是，游客可按照旅游项目安全系数之大小，对该保险做出买与不买的选择。但参加如下旅游时，你最好投个保险：探险游，如到大峡谷、洞穴猎奇探险，到沙漠、草原旅游等；生态游，如到野生动物园观看动物，到野生植物园内野炊、露营等；惊险游，如进行水流湍急的漂流、悬崖峭壁的攀援等。\r\n3、住宿游客人身保险该保险每份保费1元，从住宿之日零时算起，保险期限15天，期满可以续保，一次可投多份。每份保险责任分三个方面：一为住宿游客保险金5000元，二为住宿游客见义勇为保险金1万元，三为游客随身物品遭到意外损毁或盗抢而获赔的补偿金200元。在保险期限内，游客因遭意外事故、外来袭击、谋杀或者为保护自身或他人生命财产安全而致自身死亡、残疾或身体机能丧失，或随身携带物品遭盗窃、抢劫等，保险公司按不同标准支付保险金。\r\n4.旅游救助保险这类保险是国内各保险公司普遍开办的险种，是保险公司与国际救援中心联合SOS推出的，游客无论在国内外任何地方遭遇险情，都可拨打电话获得无偿救助。将原先的旅游人身意外保险的服务扩大，将传统保险公司的一般事后理赔向前延伸，变为事故发生时提供及时的有效的救助。\r\n·旅游求援保险：这种保险对于出国旅游十分合适。有了它的保障，旅游者一旦发生意外事故或者由于不谙当地习俗法规引起了法律纠纷，只要拨打电话，就会获得无偿的救助。\r\n', '199', '149'),
(4, '稳定意外保险', '保险公司按照保险合同的约...', '意外是无处不在不可预见的，人人都需要意外险，在投保了综合意外险之后，个人还应结合自身工作、出行特点购买相应具体的意外险。\r\n第一种：保障范围比较广泛的团体意外伤害保险和人身意外伤害保险，期限通常为一年，除违法犯罪造成的身故和残疾以外，只要是因为各种意外事故造成的身故或残疾，都是保险责任。\r\n第二种：针对出行的极短期意外险产品，通常保障期限在几天到十几天不等。比如随着黄金周出游热潮升温的旅游险，这种保险除了对意外事故导致的身故和残疾进行赔偿外，还包含因意外导致的医疗费用支出的赔偿。\r\n第三种：针对交通工具的意外险，保障期限也为一年，可以承保因为乘坐汽车、火车、轮船、飞机等交通工具出现的意外伤害。\r\n经常驾车出行的人，一定要为自己投保充足的人身意外伤害保险。\r\n经常出差的人士，还应该投保一份交通工具综合意外险，能够额外增加乘坐飞机、火车、轮船、公共汽车及出租车的保障。\r\n经常外出旅游人要特别关注旅游意外保险。', '79', '49'),
(5, '省心物资保险', '物资作为保险标的的一种保险...', '室内财产盗抢险：家用电器、服装、家具、床上用品等室内财产由于遭受盗窃、抢劫行为而丢失，经报案由公安部门确认后，可申请理赔，此附加险提供最高10万元保额。\r\n水暖管爆裂及水渍险：房屋、房屋装修、室内财产因水暖管爆裂，由此遭受水浸、腐蚀的物质损失，可申请理赔，此附加险会提供最高10万元保额。\r\n现金、金银珠宝盗抢损失险：现金、金银珠宝存放在房屋内由于遭受盗窃、抢劫所致的损失，经公安部门确认后，可申请理赔，此附加险提供最高2千元保额。\r\n保姆人身意外险：保姆在工作过程中遭受烫伤、滑到等意外伤害事故造成的医疗费用或身故伤残，即可申请理赔，此附加险会提供最高5万元保额。\r\n家用电器用电安全损失险：电压异常引起家用电器的损毁，可以申请理赔，此附加险可以提供最高10万元保额。电压异常通常是由于供电线路老化、自然灾害造成的意外或施工失误造成的短路等原因引起。\r\n高空坠物责任险：窗框、花盆等因意外从您家中坠下导致他人受伤或他人财物损毁，而您因这事件需负上法律责任的费用将可获赔偿。甚至您所住楼宇范围内发生高空坠物，而无法确定肇事者，由此经法判决由相关住户分摊的费用将可获赔偿，此附加险提供最高5万元保额。\r\n家养宠物责任险：您家合法拥有的宠物造成他人受伤或他人财物损毁，而您因这事件需要负上法律责任的费用将可获赔偿，此附加险提供最高5千元保额。宠物不包括藏獒等烈性犬只。', '599', '388');

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `realname` varchar(20) NOT NULL,
  `idnumber` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `realname`, `idnumber`, `tel`, `email`) VALUES
(16, '1', '1', '1', '1', '1', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
