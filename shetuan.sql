-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-01-02 16:18:57
-- 服务器版本： 5.7.16
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shetuan`
--

-- --------------------------------------------------------

--
-- 表的结构 `st_activity_apply`
--

CREATE TABLE `st_activity_apply` (
  `activityApplyId` int(11) UNSIGNED NOT NULL,
  `departId` int(11) NOT NULL,
  `activityApplyName` varchar(255) NOT NULL,
  `activityTime` varchar(255) NOT NULL,
  `activityApplyAddr` varchar(32) NOT NULL,
  `activityApplyContent` text NOT NULL,
  `activityApplyStatus` tinyint(4) DEFAULT '0' COMMENT '活动申请状态',
  `activityApplyTime` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='活动申请表';

--
-- 转存表中的数据 `st_activity_apply`
--

INSERT INTO `st_activity_apply` (`activityApplyId`, `departId`, `activityApplyName`, `activityTime`, `activityApplyAddr`, `activityApplyContent`, `activityApplyStatus`, `activityApplyTime`) VALUES
(1, 1, '6', '66', '6', '6', 1, '1481039110'),
(2, 1, '6', '66', '6', '6', 1, '1481039110'),
(3, 1, '7', '7', '77', '7', 1, '1481039215'),
(4, 1, 'try', '45234234', '378686', '42423', 1, '1483245634'),
(5, 1, '5', '7', '77', '7', 1, '1483247922'),
(6, 1, '8', '8', '88', '8', 1, '1483248039'),
(7, 1, '434', '9', '89', '423', 0, '1483248045'),
(8, 1, '7', '7', '7', '7', 1, '1483248224'),
(9, 1, '42342', 'uuu', 'uu', 'u', 1, '1483248672'),
(10, 1, '钓鱼', '666', '若愚湖', '钓鱼大赛', 1, '1483351738'),
(11, 1, 'ddd', 'dd', 'dd', 'd', 1, '1483351802');

-- --------------------------------------------------------

--
-- 表的结构 `st_activity_info`
--

CREATE TABLE `st_activity_info` (
  `activityId` int(11) UNSIGNED NOT NULL,
  `departId` int(11) NOT NULL,
  `activityName` varchar(255) NOT NULL,
  `activityTime` varchar(32) NOT NULL,
  `activityAddr` varchar(32) NOT NULL,
  `activityContent` text NOT NULL,
  `createTime` varchar(255) NOT NULL,
  `status` int(11) DEFAULT '0' COMMENT '0代表活跃，1代表活动过期删除。'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='活动信息表';

--
-- 转存表中的数据 `st_activity_info`
--

INSERT INTO `st_activity_info` (`activityId`, `departId`, `activityName`, `activityTime`, `activityAddr`, `activityContent`, `createTime`, `status`) VALUES
(1, 1, '6', '66', '6', '6', '2016-12-08 22:19:21', 1),
(2, 1, '7', '7', '77', '7', '2016-12-08 22:19:27', 1),
(3, 1, '7', '7', '77', '7', '2017-01-01 12:37:54', 1),
(4, 1, '6', '66', '6', '6', '2017-01-01 12:38:02', 1),
(5, 1, '6', '66', '6', '6', '2017-01-01 12:38:10', 1),
(6, 1, 'try', '45234234', '378686', '42423', '2017-01-01 13:14:16', 1),
(7, 1, '5', '7', '77', '7', '2017-01-01 13:20:55', 1),
(8, 1, '8', '8', '88', '8', '2017-01-01 13:21:07', 1),
(9, 1, '434', '9', '89', '423', '2017-01-01 13:23:00', 1),
(10, 1, '42342', 'uuu', 'uu', 'u', '2017-01-01 13:31:20', 1),
(11, 1, '6', '66', '6', '6', '2017-01-01 13:34:11', 1),
(12, 1, '5', '7', '77', '7', '2017-01-01 13:38:32', 1),
(13, 1, '8', '8', '88', '8', '2017-01-01 13:38:43', 1),
(14, 1, '434', '9', '89', '423', '2017-01-01 13:39:12', 1),
(15, 1, '7', '7', '7', '7', '2017-01-01 13:47:08', 1),
(16, 1, '6', '66', '6', '6', '2017-01-01 13:57:04', 1),
(17, 1, '7', '7', '77', '7', '2017-01-01 13:58:42', 1),
(18, 1, 'try', '45234234', '378686', '42423', '2017-01-01 13:59:15', 1),
(19, 1, '5', '7', '77', '7', '2017-01-01 13:59:22', 1),
(20, 1, '8', '8', '88', '8', '2017-01-01 14:02:37', 1),
(21, 1, '434', '9', '89', '423', '2017-01-01 14:04:13', 1),
(22, 1, 'ddd', 'dd', 'dd', 'd', '2017-01-02 22:02:49', 1),
(23, 1, '钓鱼', '666', '若愚湖', '钓鱼大赛', '2017-01-02 22:04:48', 1),
(24, 1, '6', '66', '6', '6', '2017-01-02 22:06:13', 1),
(25, 1, '7', '7', '77', '7', '2017-01-02 22:07:22', 1),
(26, 1, '5', '7', '77', '7', '2017-01-02 22:11:35', 1),
(27, 1, '434', '9', '89', '423', '2017-01-02 22:12:27', 1),
(28, 1, '7', '7', '7', '7', '2017-01-02 22:14:09', 1),
(29, 1, '6', '66', '6', '6', '2017-01-02 22:16:29', 1),
(30, 1, '6', '66', '6', '6', '2017-01-02 22:19:11', 1),
(31, 1, '7', '7', '77', '7', '2017-01-02 22:19:43', 1),
(32, 1, 'try', '45234234', '378686', '42423', '2017-01-02 22:20:26', 1),
(33, 1, '5', '7', '77', '7', '2017-01-02 22:20:42', 1),
(34, 1, '8', '8', '88', '8', '2017-01-02 22:21:09', 1),
(35, 1, '42342', 'uuu', 'uu', 'u', '2017-01-02 22:23:12', 1),
(36, 1, '434', '9', '89', '423', '2017-01-02 22:24:39', 1),
(37, 1, '7', '7', '7', '7', '2017-01-02 22:27:47', 1),
(38, 1, '6', '66', '6', '6', '2017-01-02 22:29:38', 1),
(39, 1, '6', '66', '6', '6', '2017-01-02 22:42:48', 1),
(40, 1, '7', '7', '77', '7', '2017-01-02 22:46:19', 0),
(41, 1, 'try', '45234234', '378686', '42423', '2017-01-02 22:49:46', 0),
(42, 1, '5', '7', '77', '7', '2017-01-02 22:55:04', 0),
(43, 1, '7', '7', '7', '7', '2017-01-02 22:55:21', 0),
(44, 1, '8', '8', '88', '8', '2017-01-02 22:55:46', 0);

-- --------------------------------------------------------

--
-- 表的结构 `st_admin_info`
--

CREATE TABLE `st_admin_info` (
  `adminId` int(11) UNSIGNED NOT NULL,
  `roleId` int(11) NOT NULL,
  `departId` int(11) DEFAULT NULL,
  `adminName` varchar(32) NOT NULL,
  `adminPassword` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员信息表';

--
-- 转存表中的数据 `st_admin_info`
--

INSERT INTO `st_admin_info` (`adminId`, `roleId`, `departId`, `adminName`, `adminPassword`) VALUES
(1, 3, 0, 'qq', '111'),
(2, 2, 1, 'qqq', '111');

-- --------------------------------------------------------

--
-- 表的结构 `st_attendance_info`
--

CREATE TABLE `st_attendance_info` (
  `attendanceId` int(11) UNSIGNED NOT NULL,
  `departId` int(11) NOT NULL,
  `attendancePeople` varchar(255) NOT NULL,
  `attendanceTime` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='值班信息表';

--
-- 转存表中的数据 `st_attendance_info`
--

INSERT INTO `st_attendance_info` (`attendanceId`, `departId`, `attendancePeople`, `attendanceTime`) VALUES
(2, 1, '孔文涛shuaibi', '2016-09-03'),
(4, 1, '盖伦', '2016-04-09');

-- --------------------------------------------------------

--
-- 表的结构 `st_depart_apply`
--

CREATE TABLE `st_depart_apply` (
  `departApplyId` int(11) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL COMMENT '申请人id',
  `departApplyName` varchar(32) NOT NULL,
  `departApplyIntroduction` text NOT NULL COMMENT '新社团简介',
  `departApplyReason` text NOT NULL COMMENT '申请原因',
  `departApplyTime` varchar(32) NOT NULL,
  `departApplyStatus` tinyint(4) NOT NULL COMMENT '0未处理，1同意申请，2处理，不同意申请（软删除）'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='新社团申请表';

--
-- 转存表中的数据 `st_depart_apply`
--

INSERT INTO `st_depart_apply` (`departApplyId`, `userId`, `departApplyName`, `departApplyIntroduction`, `departApplyReason`, `departApplyTime`, `departApplyStatus`) VALUES
(1, 13, '电脑', '888', '444', '2016-11-30 18:32:08', 1),
(2, 13, '羽毛球', '888', '444', '2016-11-30 18:32:08', 1),
(3, 13, '篮球', '444', '444', '2016-11-30 18:43:50', 1),
(4, 13, '撸啊撸', '哈哈哈', '没有理由', '2016-11-30 21:26:48', 1),
(5, 13, '4342', '4', '45', '2016-11-30 22:06:08', 1),
(6, 13, 'tao', '111', '111', '2016-12-01 22:12:54', 2);

-- --------------------------------------------------------

--
-- 表的结构 `st_depart_Info`
--

CREATE TABLE `st_depart_Info` (
  `departId` int(11) UNSIGNED NOT NULL,
  `departName` varchar(32) NOT NULL,
  `departIntroduction` text NOT NULL,
  `dapartCreateTime` varchar(32) NOT NULL,
  `departStatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='社团信息表\n';

--
-- 转存表中的数据 `st_depart_Info`
--

INSERT INTO `st_depart_Info` (`departId`, `departName`, `departIntroduction`, `dapartCreateTime`, `departStatus`) VALUES
(1, '电脑', '888', '2016-12-01 14:38:59', 1),
(2, '羽毛球', '888', '2016-12-01 14:42:44', 1),
(3, '撸啊撸', '哈哈哈', '2016-12-01 14:42:47', 1),
(4, '篮球', '444', '2016-12-01 22:50:39', 1),
(5, '4342', '4', '2016-12-01 22:50:42', 1),
(6, 'test', 'hihi', '2015-09-08', 1),
(7, 'test', 'hihi', '2015-09-08', 1);

-- --------------------------------------------------------

--
-- 表的结构 `st_depart_Info_copy`
--

CREATE TABLE `st_depart_Info_copy` (
  `departId` int(11) UNSIGNED NOT NULL,
  `departName` varchar(32) NOT NULL,
  `departIntroduction` text NOT NULL,
  `dapartCreateTime` varchar(32) NOT NULL,
  `departStatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='社团信息表\n';

--
-- 转存表中的数据 `st_depart_Info_copy`
--

INSERT INTO `st_depart_Info_copy` (`departId`, `departName`, `departIntroduction`, `dapartCreateTime`, `departStatus`) VALUES
(1, '电脑', '888', '2016-12-01 14:38:59', 1),
(2, '羽毛球', '888', '2016-12-01 14:42:44', 1),
(3, '撸啊撸', '哈哈哈', '2016-12-01 14:42:47', 1),
(4, '篮球', '444', '2016-12-01 22:50:39', 1),
(5, '4342', '4', '2016-12-01 22:50:42', 1);

-- --------------------------------------------------------

--
-- 表的结构 `st_expense_info`
--

CREATE TABLE `st_expense_info` (
  `expenseId` int(11) NOT NULL,
  `departId` int(11) NOT NULL,
  `expenseTime` varchar(11) NOT NULL,
  `expenseMethod` tinyint(4) NOT NULL COMMENT '操作类型，1收入，0支出',
  `expenseCharge` float NOT NULL,
  `expenseNote` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `st_expense_info`
--

INSERT INTO `st_expense_info` (`expenseId`, `departId`, `expenseTime`, `expenseMethod`, `expenseCharge`, `expenseNote`) VALUES
(2, 1, '31223', 2, 312, '约炮支出'),
(3, 1, '313', 1, 31, '13'),
(4, 1, '11', 1, 11, '11'),
(5, 1, '3123', 1, 3123, '123'),
(6, 1, '213', 2, 23, '1'),
(7, 1, '', 1, 66, '888'),
(8, 1, '666', 1, 66, '66'),
(9, 1, '423', 1, 23, '423');

-- --------------------------------------------------------

--
-- 表的结构 `st_goods_info`
--

CREATE TABLE `st_goods_info` (
  `goodsId` int(11) UNSIGNED NOT NULL,
  `departId` int(11) NOT NULL,
  `goodsName` varchar(255) NOT NULL,
  `goodsTime` varchar(255) NOT NULL,
  `goodsNum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `st_goods_info`
--

INSERT INTO `st_goods_info` (`goodsId`, `departId`, `goodsName`, `goodsTime`, `goodsNum`) VALUES
(2, 1, '砒霜', '2017-02-02 09:23:36', '234');

-- --------------------------------------------------------

--
-- 表的结构 `st_institution_info`
--

CREATE TABLE `st_institution_info` (
  `institutionId` int(11) UNSIGNED NOT NULL,
  `departId` int(11) NOT NULL,
  `institutionTitle` varchar(255) NOT NULL,
  `institutionContent` varchar(32) NOT NULL,
  `institutionTime` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='值班信息表';

--
-- 转存表中的数据 `st_institution_info`
--

INSERT INTO `st_institution_info` (`institutionId`, `departId`, `institutionTitle`, `institutionContent`, `institutionTime`) VALUES
(2, 1, '孔文涛', '请二位', '2017-01-01 17:44:29'),
(3, 1, '工作期间禁止黄赌毒', 'RT', '2017-01-01 17:45:21'),
(4, 1, '头大了', '干他大爷的一炮', '2017-01-02 19:20:44');

-- --------------------------------------------------------

--
-- 表的结构 `st_message_info`
--

CREATE TABLE `st_message_info` (
  `messageId` int(11) UNSIGNED NOT NULL,
  `departId` int(11) NOT NULL,
  `messageTitle` varchar(255) NOT NULL,
  `messageTime` varchar(255) NOT NULL,
  `messageContent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='消息信息表';

--
-- 转存表中的数据 `st_message_info`
--

INSERT INTO `st_message_info` (`messageId`, `departId`, `messageTitle`, `messageTime`, `messageContent`) VALUES
(8, 1, '你好', '2017-01-02 18:58:06', '王八蛋'),
(9, 1, '你好', '2017-01-02 18:58:43', '呵呵呵');

-- --------------------------------------------------------

--
-- 表的结构 `st_role`
--

CREATE TABLE `st_role` (
  `roleId` int(11) UNSIGNED NOT NULL COMMENT '角色编号',
  `roleName` varchar(32) NOT NULL COMMENT '角色名称'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='角色表';

--
-- 转存表中的数据 `st_role`
--

INSERT INTO `st_role` (`roleId`, `roleName`) VALUES
(1, '普通用户'),
(2, '部门管理员'),
(3, '超级管理员');

-- --------------------------------------------------------

--
-- 表的结构 `st_userinfo`
--

CREATE TABLE `st_userinfo` (
  `uid` int(11) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `roleId` tinyint(4) NOT NULL DEFAULT '1' COMMENT '默认是1 代表是普通用户',
  `userName` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userEmail` varchar(32) NOT NULL,
  `userGender` tinyint(4) NOT NULL,
  `userAge` int(11) NOT NULL,
  `userTelphone` varchar(32) NOT NULL,
  `userQq` varchar(32) NOT NULL,
  `modifyTime` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1代表活跃状态。0软删除'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户所有信息表';

--
-- 转存表中的数据 `st_userinfo`
--

INSERT INTO `st_userinfo` (`uid`, `userId`, `roleId`, `userName`, `userPassword`, `userEmail`, `userGender`, `userAge`, `userTelphone`, `userQq`, `modifyTime`, `status`) VALUES
(1, 13, 0, 'pp', '698d51a19d8a121ce581499d7b701668', 'pp', 1, 3123, '3123', '13123', '2016-12-01 17:33:31', 0),
(4, 17, 0, 'eee', '698d51a19d8a121ce581499d7b701668', '111', 1, 22, '323', '123', '2016-12-01 17:55:31', 0),
(5, 19, 0, '333', '310dcbbf4cce62f762a2aaa148d556bd', '333', 1, 666, '666', '666', '2016-12-01 18:07:09', 0),
(6, 21, 1, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'aaa', 1, 11, '3123', '3123', '2016-12-01 22:23:12', 1),
(7, 23, 1, 'tao', '698d51a19d8a121ce581499d7b701668', '666@163.com', 1, 36, '111111', '111', '2017-01-01 12:35:20', 1),
(8, 28, 1, 'hello', '698d51a19d8a121ce581499d7b701668', 'tt', 1, 67, '15261138211', '937069176', '2017-01-02 10:56:13', 1);

-- --------------------------------------------------------

--
-- 表的结构 `st_user_baseinfo`
--

CREATE TABLE `st_user_baseinfo` (
  `userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userCreateTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户信息表';

--
-- 转存表中的数据 `st_user_baseinfo`
--

INSERT INTO `st_user_baseinfo` (`userId`, `userName`, `userPassword`, `userEmail`, `userCreateTime`) VALUES
(1, 'tao', '111', '15261138211@163.com', '2016-11-30:15:01:02'),
(2, '孔文涛', '111', '15261138211@163.com', '2016-11-30:15:01:59'),
(3, '孔文涛', '111', '15261138211@163.com', '2016-11-30:15:01:59'),
(7, 'dahuang', '111', '666', '2016-11-30:15:21:41'),
(8, 'hi', '222', '423', '2016-11-30:15:24:22'),
(9, 'taotao', '123', '123', '2016-11-30:15:53:44'),
(10, 'root', '123123', '111', '2016-11-30:15:56:55'),
(11, 'qq', '202cb962ac59075b964b07152d234b70', 'xixi', '2016-11-30:16:18:26'),
(12, 'fuck', '698d51a19d8a121ce581499d7b701668', '111', '2016-11-30:16:21:53'),
(13, 'pp', '698d51a19d8a121ce581499d7b701668', 'pp', '2016-11-30:16:25:39'),
(14, '444', '4297f44b13955235245b2497399d7a93', '54', '2016-11-30:22:05:01'),
(15, 'hello', '698d51a19d8a121ce581499d7b701668', '111', '2016-12-01:17:45:02'),
(16, 'eee', '698d51a19d8a121ce581499d7b701668', '111', '2016-12-01:17:50:29'),
(17, 'eee', '698d51a19d8a121ce581499d7b701668', '111', '2016-12-01:17:50:29'),
(18, '333', '310dcbbf4cce62f762a2aaa148d556bd', '333', '2016-12-01:17:59:03'),
(19, '333', '310dcbbf4cce62f762a2aaa148d556bd', '333', '2016-12-01:17:59:03'),
(20, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'aaa', '2016-12-01:22:22:48'),
(21, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'aaa', '2016-12-01:22:22:48'),
(22, 'tao', '698d51a19d8a121ce581499d7b701668', '666@163.com', '2017-01-01:12:34:56'),
(23, 'tao', '698d51a19d8a121ce581499d7b701668', '666@163.com', '2017-01-01:12:34:56'),
(24, 'test', '698d51a19d8a121ce581499d7b701668', '111', '2017-01-02:09:55:38'),
(25, 'test', '698d51a19d8a121ce581499d7b701668', '111', '2017-01-02:09:55:38'),
(26, 'yy', '698d51a19d8a121ce581499d7b701668', '33', '2017-01-02:09:56:04'),
(27, 'yy', '698d51a19d8a121ce581499d7b701668', '33', '2017-01-02:09:56:04'),
(28, 'hello', '698d51a19d8a121ce581499d7b701668', 'tt', '2017-01-02:09:57:58'),
(29, '555', '15de21c670ae7c3f6f3f1f37029303c9', '555', '2017-01-02:23:05:59'),
(30, 'eee', 'd2f2297d6e829cd3493aa7de4416a18f', 'eee', '2017-01-02:23:10:02'),
(31, '4234', 'fd45ebc1e1d76bc1fe0ba933e60e9957', '423', '2017-01-02:23:10:44'),
(32, 'kong', '698d51a19d8a121ce581499d7b701668', 'kong', '2017-01-02:23:14:29');

-- --------------------------------------------------------

--
-- 表的结构 `st_user_depart`
--

CREATE TABLE `st_user_depart` (
  `id` int(11) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `departId` int(11) NOT NULL,
  `joinTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `st_user_depart`
--

INSERT INTO `st_user_depart` (`id`, `userId`, `departId`, `joinTime`) VALUES
(4, 21, 4, '2016-12-01 22:51:44'),
(5, 21, 4, '2016-12-01 22:51:46');

-- --------------------------------------------------------

--
-- 表的结构 `st_user_join_Apply`
--

CREATE TABLE `st_user_join_Apply` (
  `joinId` int(11) UNSIGNED NOT NULL COMMENT '申请加入的编号',
  `userId` int(11) UNSIGNED NOT NULL COMMENT '用户基础信息的ID',
  `userName` varchar(32) NOT NULL,
  `departId` int(11) UNSIGNED NOT NULL COMMENT '申请加入部门的ID',
  `departName` varchar(255) NOT NULL,
  `applyReason` text NOT NULL COMMENT '申请加入社团的理由',
  `applyStatus` tinyint(4) DEFAULT '0' COMMENT '审核状态 0 未审核  1 通过 2拒绝',
  `applyTime` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `st_user_join_Apply`
--

INSERT INTO `st_user_join_Apply` (`joinId`, `userId`, `userName`, `departId`, `departName`, `applyReason`, `applyStatus`, `applyTime`) VALUES
(1, 13, '', 1, '', 'fuck 啊', 2, '2016-12-01 17:42:42'),
(2, 19, '', 1, '', 'tertew', 2, '2016-12-01 18:07:22'),
(3, 19, '', 2, '', 'rewrq', 2, '2016-12-01 18:07:28'),
(4, 13, 'pp', 1, '电脑', 'hello world', 1, '2016-12-01 22:21:27'),
(5, 13, 'pp', 1, '电脑', '666', 1, '2016-12-01 22:21:27'),
(6, 13, 'pp', 1, '电脑', '999931231', 1, '2016-12-01 22:21:27'),
(7, 21, 'aaa', 1, '电脑', '423424', 1, '2016-12-01 22:23:33'),
(8, 21, 'aaa', 4, '篮球', '4234242', 1, '2016-12-01 22:51:23'),
(9, 21, 'aaa', 4, '篮球', '4234242', 1, '2016-12-01 22:51:23'),
(10, 21, 'aaa', 1, '电脑', '555', 0, '2016-12-01 22:58:24'),
(11, 28, 'hello', 3, '撸啊撸', '大神', 1, '2017-01-02 09:58:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `st_activity_apply`
--
ALTER TABLE `st_activity_apply`
  ADD PRIMARY KEY (`activityApplyId`);

--
-- Indexes for table `st_activity_info`
--
ALTER TABLE `st_activity_info`
  ADD PRIMARY KEY (`activityId`);

--
-- Indexes for table `st_admin_info`
--
ALTER TABLE `st_admin_info`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `st_attendance_info`
--
ALTER TABLE `st_attendance_info`
  ADD PRIMARY KEY (`attendanceId`);

--
-- Indexes for table `st_depart_apply`
--
ALTER TABLE `st_depart_apply`
  ADD PRIMARY KEY (`departApplyId`);

--
-- Indexes for table `st_depart_Info`
--
ALTER TABLE `st_depart_Info`
  ADD PRIMARY KEY (`departId`);

--
-- Indexes for table `st_depart_Info_copy`
--
ALTER TABLE `st_depart_Info_copy`
  ADD PRIMARY KEY (`departId`);

--
-- Indexes for table `st_expense_info`
--
ALTER TABLE `st_expense_info`
  ADD PRIMARY KEY (`expenseId`);

--
-- Indexes for table `st_goods_info`
--
ALTER TABLE `st_goods_info`
  ADD PRIMARY KEY (`goodsId`);

--
-- Indexes for table `st_institution_info`
--
ALTER TABLE `st_institution_info`
  ADD PRIMARY KEY (`institutionId`);

--
-- Indexes for table `st_message_info`
--
ALTER TABLE `st_message_info`
  ADD PRIMARY KEY (`messageId`);

--
-- Indexes for table `st_role`
--
ALTER TABLE `st_role`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `st_userinfo`
--
ALTER TABLE `st_userinfo`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `st_user_baseinfo`
--
ALTER TABLE `st_user_baseinfo`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `st_user_depart`
--
ALTER TABLE `st_user_depart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_user_join_Apply`
--
ALTER TABLE `st_user_join_Apply`
  ADD PRIMARY KEY (`joinId`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `st_activity_apply`
--
ALTER TABLE `st_activity_apply`
  MODIFY `activityApplyId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 使用表AUTO_INCREMENT `st_activity_info`
--
ALTER TABLE `st_activity_info`
  MODIFY `activityId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- 使用表AUTO_INCREMENT `st_admin_info`
--
ALTER TABLE `st_admin_info`
  MODIFY `adminId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `st_attendance_info`
--
ALTER TABLE `st_attendance_info`
  MODIFY `attendanceId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `st_depart_apply`
--
ALTER TABLE `st_depart_apply`
  MODIFY `departApplyId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `st_depart_Info`
--
ALTER TABLE `st_depart_Info`
  MODIFY `departId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `st_depart_Info_copy`
--
ALTER TABLE `st_depart_Info_copy`
  MODIFY `departId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `st_expense_info`
--
ALTER TABLE `st_expense_info`
  MODIFY `expenseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用表AUTO_INCREMENT `st_goods_info`
--
ALTER TABLE `st_goods_info`
  MODIFY `goodsId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `st_institution_info`
--
ALTER TABLE `st_institution_info`
  MODIFY `institutionId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `st_message_info`
--
ALTER TABLE `st_message_info`
  MODIFY `messageId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用表AUTO_INCREMENT `st_role`
--
ALTER TABLE `st_role`
  MODIFY `roleId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '角色编号', AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `st_userinfo`
--
ALTER TABLE `st_userinfo`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `st_user_baseinfo`
--
ALTER TABLE `st_user_baseinfo`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- 使用表AUTO_INCREMENT `st_user_depart`
--
ALTER TABLE `st_user_depart`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `st_user_join_Apply`
--
ALTER TABLE `st_user_join_Apply`
  MODIFY `joinId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '申请加入的编号', AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
