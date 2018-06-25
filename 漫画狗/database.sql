-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: 2018-06-25 15:20:15
-- 服务器版本： 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_book`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `name`, `password`) VALUES
(1, 'root', 'ghq19980425');

-- --------------------------------------------------------

--
-- 表的结构 `tb_book`
--

CREATE TABLE `tb_book` (
  `id` int(12) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `bookinfo` varchar(500) NOT NULL,
  `bookimage` varchar(100) NOT NULL,
  `bookzt` varchar(20) NOT NULL DEFAULT '连载中',
  `bookdate` date DEFAULT '2018-06-18'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_book`
--

INSERT INTO `tb_book` (`id`, `bookname`, `bookinfo`, `bookimage`, `bookzt`, `bookdate`) VALUES
(1, '崩坏3rd', '崩坏学园系列漫画最新作《崩坏3rd》延续了《崩坏学园2》主线剧情，讲述了琪亚娜等人在逃离千羽学园的过程中，遇到无量塔姬子，开始新的冒险的故事...在拯救世界的冒险中，琪亚娜，芽衣，布洛妮娅的身世也将逐渐揭晓。\r\n', '崩坏3rd.jpg', '连载中', '2018-06-18'),
(2, '等风来', '我把那些平淡琐事的故事藏着心里，有一天，他们会出现在风里。 ', '等风来.jpg', '连载中', '2018-06-18'),
(3, '虎x鹤妖师录', '妖魔鬼怪，仙道妖法，奇珍异宝，一个降魔卫道的玄幻世界！', '虎x鹤妖师录.jpg', '连载中', '2018-06-18'),
(4, '逆转恋情', '霸道女总裁为复仇把仇人的儿子娶进家门百般羞辱，然而打不还手骂不还口的软饭老公是否像表面上那般无害呢？', '逆转恋情.jpg', '连载中', '2018-06-18'),
(5, '杀道行者', '世道上，传闻有这么一个集合着社会上的知名人士们，神秘而庞大的组织——杀道会。每个杀道会的核心成员，都拥有匪夷所思的超能力，他们是超级杀手，也是至高道义实行者。阿信，一个被愤怒和悲伤所束缚的男人，他只有一个目的：毁掉杀道会！ 关注官方微博:@杀_道_行_者,@马姐就是我本人;微信公众号[百漫GO]，官方贴吧:杀道行者吧，可提前看预告更新获取更多漫画动态！', '杀道行者.jpg', '连载中', '2018-06-18'),
(6, '我的猫咪上仙', '我本为仙界寅虎神官之子，因历劫需下入凡间寻应劫之人，度过仙劫位列仙班。谁知法力被封变成一只幼猫，应劫之人还是个狂爱吸猫之人，他……他扯我尾巴、揉我肚皮，还……还摸我蛋蛋 （＞﹏＜）', '我的猫咪上仙.jpg', '连载中', '2018-06-18'),
(7, '无限宇宙', '漫画画手阿歇阴差阳错被搅进平行宇宙里某神秘机关的运输任务中，一路逆袭一路冒险的爆笑日常！？？不过老实说，什么宇宙空间转运局，你们的工作好像就是送快递啊！！', '无限宇宙.jpg', '连载中', '2018-06-18'),
(8, '虚实江湖侠影录', '被老板推出来当替罪羊的潜入专家？？？？阴差阳错之下获得了穿梭虚拟世界的能力？？？？从此谱写出一部现实和虚拟世界交织的侠客神话....', '虚实江湖侠影录.jpg', '连载中', '2018-06-18'),
(9, '玄炼幻纪', '这是一个以【玄炼者】为主流的世界。所谓玄炼者，是指通过修炼【玄力】以求飞升【玄境】之人。为了贯彻自己玄炼之道的人们纷纷朝着玄炼者传奇的顶点【玄帝】进发。 而玄炼界的全新传说也将在此展开……', '玄炼幻纪.jpg', '连载中', '2018-06-18'),
(10, '学崖逃', '劳育学院是一所专门看管“罪恶之人”的学院。3年前，老院长和助手们造出管理学院的仪器——智慧母体。立刻使原本无序、疯狂且充满争吵和斗殴的学院得到了统一的管理……但不知道为何，老院长还是关闭了这台仪器，学院又陷入从前的混乱。3年后，新院长在办公桌下发现了重启智慧母体的方法，面对学院管理暴露出来的... ', '学崖逃.jpg', '连载中', '2018-06-18'),
(11, '驭灵师', '“我被丢到自己的漫画里啦！”“我变强了，但也秃了……”“那个把我扔进这个世界的SB，你对力量一无所知！”“等等！光头太丑了！我才不要做埼玉老师！”“不过我怎么就成了配角呢？旁边那个家伙的主角光环真是耀眼啊……”“口桀口桀……果然还是要一头帅气的长发才符合我大BOSS的身份！”这是一个漫画家降临自己笔下世界的冒险故事。', '驭灵师.jpg', '连载中', '2018-06-18'),
(12, '镇魂街', '镇魂街乃吸纳亡灵镇压恶灵之地。这是一个人灵共存的世界，但不是每个人都能进入镇魂街，只有拥有守护灵的寄灵人才可进入。夏铃原本是一名普通的大学实习生，但一次偶然导致她的人生从此不再平凡……在这个充满恶灵的世界，你能与你的守护灵携手生存下去吗？', '镇魂街.jpg', '连载中', '2018-06-18'),
(13, '心之茧', '被仇恨驱使的他，开始欺负他，羞辱凌虐他，但他感到的满足是因为报复的快意？就像畸形的瘾一样，他停不下来…… ', '心之茧.jpg', '连载中', '2018-06-18'),
(22, '开元秘史', '讲述盛唐浮华背后的欲、爱、权、谋。原名《开元异闻录》，政治惊悚类题材，非耽美，非耽美，非耽美，只是主角刚好喜欢搞基。每周六(或日)全彩更新。', '开元秘史.jpg', '连载中', '2018-06-12');

-- --------------------------------------------------------

--
-- 表的结构 `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`) VALUES
(2, 'root', 'ghq19980425'),
(11, 'helloworld', 'ghqghqghq'),
(12, 'helloworld1', '123123123'),
(13, 'hahahahha', '123123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_book`
--
ALTER TABLE `tb_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `tb_book`
--
ALTER TABLE `tb_book`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 使用表AUTO_INCREMENT `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
