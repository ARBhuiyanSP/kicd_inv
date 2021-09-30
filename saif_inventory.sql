CREATE TABLE `history` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `entity_id` int(10) UNSIGNED DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assets` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `type_id`, `user_id`, `entity_id`, `icon`, `class`, `text`, `assets`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 49, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>create-plant-equipment</strong>', NULL, '2019-01-21 23:42:35', '2019-01-21 23:42:35'),
(2, 3, 1, 49, 'save', 'bg-aqua', 'trans(\"history.backend.permissions.updated\") <strong>create-plant-equipment</strong>', NULL, '2019-01-21 23:43:48', '2019-01-21 23:43:48'),
(3, 2, 1, 2, 'save', 'bg-aqua', 'trans(\"history.backend.roles.updated\") <strong>Executive</strong>', NULL, '2019-01-21 23:46:25', '2019-01-21 23:46:25'),
(4, 1, 1, 4, 'plus', 'bg-green', 'trans(\"history.backend.users.created\") <strong>{user}</strong>', '{\"user_link\":[\"admin.access.user.show\",\"Rashed Al Banna\",4]}', '2019-02-03 21:18:51', '2019-02-03 21:18:51'),
(5, 1, 1, 4, 'save', 'bg-aqua', 'trans(\"history.backend.users.updated\") <strong>{user}</strong>', '{\"user_link\":[\"admin.access.user.show\",\"Rashed Al Banna\",4]}', '2019-02-03 21:21:04', '2019-02-03 21:21:04'),
(6, 3, 1, 50, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>edit-plant-equipment</strong>', NULL, '2019-02-09 16:20:08', '2019-02-09 16:20:08'),
(7, 3, 1, 51, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>view-plant-equipment</strong>', NULL, '2019-02-09 16:21:08', '2019-02-09 16:21:08'),
(8, 3, 1, 52, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>delete-plant-equipment</strong>', NULL, '2019-02-09 16:22:25', '2019-02-09 16:22:25'),
(9, 3, 1, 53, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>view-reports</strong>', NULL, '2019-02-09 16:48:43', '2019-02-09 16:48:43'),
(10, 3, 1, 54, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>create-projects</strong>', NULL, '2019-02-09 20:33:20', '2019-02-09 20:33:20'),
(11, 3, 1, 55, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>edit-projects</strong>', NULL, '2019-02-09 20:46:59', '2019-02-09 20:46:59'),
(12, 3, 1, 56, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>view-projects</strong>', NULL, '2019-02-09 21:12:35', '2019-02-09 21:12:35'),
(13, 3, 1, 57, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>delete-projects</strong>', NULL, '2019-02-09 21:13:20', '2019-02-09 21:13:20'),
(14, 1, 1, 4, 'save', 'bg-aqua', 'trans(\"history.backend.users.updated\") <strong>{user}</strong>', '{\"user_link\":[\"admin.access.user.show\",\"Rashed Al Banna\",4]}', '2019-02-11 18:42:08', '2019-02-11 18:42:08'),
(15, 3, 1, 58, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>create-items</strong>', NULL, '2019-02-23 06:14:05', '2019-02-23 06:14:05'),
(16, 3, 1, 59, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>edit-items</strong>', NULL, '2019-02-23 06:15:10', '2019-02-23 06:15:10'),
(17, 3, 1, 60, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>view-items</strong>', NULL, '2019-02-23 06:15:38', '2019-02-23 06:15:38'),
(18, 3, 1, 61, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>delete-items</strong>', NULL, '2019-02-23 06:16:35', '2019-02-23 06:16:35'),
(19, 3, 1, 62, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>view-products</strong>', NULL, '2019-02-23 07:09:38', '2019-02-23 07:09:38'),
(20, 3, 1, 63, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>create-products</strong>', NULL, '2019-02-23 07:10:22', '2019-02-23 07:10:22'),
(21, 3, 1, 64, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>edit-Products</strong>', NULL, '2019-02-23 07:10:55', '2019-02-23 07:10:55'),
(22, 3, 1, 65, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>delete-products</strong>', NULL, '2019-02-23 07:11:18', '2019-02-23 07:11:18'),
(23, 3, 1, 65, 'save', 'bg-aqua', 'trans(\"history.backend.permissions.updated\") <strong>delete-products</strong>', NULL, '2019-02-23 07:11:35', '2019-02-23 07:11:35'),
(24, 3, 1, 64, 'save', 'bg-aqua', 'trans(\"history.backend.permissions.updated\") <strong>edit-products</strong>', NULL, '2019-02-23 07:11:59', '2019-02-23 07:11:59'),
(25, 3, 1, 66, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>create-product-receive</strong>', NULL, '2019-02-23 08:51:48', '2019-02-23 08:51:48'),
(26, 3, 1, 67, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>edit-product-receive</strong>', NULL, '2019-02-23 08:52:36', '2019-02-23 08:52:36'),
(27, 3, 1, 68, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>view-product-receive</strong>', NULL, '2019-02-23 08:53:22', '2019-02-23 08:53:22'),
(28, 3, 1, 69, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>delete-product-receive</strong>', NULL, '2019-02-23 08:54:06', '2019-02-23 08:54:06'),
(29, 3, 1, 70, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>create-project-challan</strong>', NULL, '2019-02-23 10:14:49', '2019-02-23 10:14:49'),
(30, 3, 1, 71, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>edit-project-challan</strong>', NULL, '2019-02-23 10:15:22', '2019-02-23 10:15:22'),
(31, 3, 1, 72, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>view-project-challan</strong>', NULL, '2019-02-23 10:15:58', '2019-02-23 10:15:58'),
(32, 3, 1, 73, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>delete-project-challan</strong>', NULL, '2019-02-23 10:16:33', '2019-02-23 10:16:33'),
(33, 3, 1, 33, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>view-blog-category</strong>', NULL, '2019-02-24 17:34:13', '2019-02-24 17:34:13'),
(34, 3, 1, 34, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>create-blog-category</strong>', NULL, '2019-02-24 17:34:24', '2019-02-24 17:34:24'),
(35, 3, 1, 35, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>edit-blog-category</strong>', NULL, '2019-02-24 17:34:36', '2019-02-24 17:34:36'),
(36, 3, 1, 36, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>delete-blog-category</strong>', NULL, '2019-02-24 17:34:47', '2019-02-24 17:34:47'),
(37, 3, 1, 37, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>view-blog-tag</strong>', NULL, '2019-02-24 17:34:57', '2019-02-24 17:34:57'),
(38, 3, 1, 38, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>create-blog-tag</strong>', NULL, '2019-02-24 17:35:08', '2019-02-24 17:35:08'),
(39, 3, 1, 39, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>edit-blog-tag</strong>', NULL, '2019-02-24 17:35:19', '2019-02-24 17:35:19'),
(40, 3, 1, 40, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>delete-blog-tag</strong>', NULL, '2019-02-24 17:35:29', '2019-02-24 17:35:29'),
(41, 3, 1, 41, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>view-blog</strong>', NULL, '2019-02-24 17:35:52', '2019-02-24 17:35:52'),
(42, 3, 1, 43, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>edit-blog</strong>', NULL, '2019-02-24 17:36:03', '2019-02-24 17:36:03'),
(43, 3, 1, 42, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>create-blog</strong>', NULL, '2019-02-24 17:36:14', '2019-02-24 17:36:14'),
(44, 3, 1, 44, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>delete-blog</strong>', NULL, '2019-02-24 17:37:55', '2019-02-24 17:37:55'),
(45, 3, 1, 45, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>view-faq</strong>', NULL, '2019-02-24 17:38:04', '2019-02-24 17:38:04'),
(46, 3, 1, 46, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>create-faq</strong>', NULL, '2019-02-24 17:38:12', '2019-02-24 17:38:12'),
(47, 3, 1, 47, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>edit-faq</strong>', NULL, '2019-02-24 17:38:21', '2019-02-24 17:38:21'),
(48, 3, 1, 48, 'trash', 'bg-maroon', 'trans(\"history.backend.permissions.deleted\") <strong>delete-faq</strong>', NULL, '2019-02-24 17:38:54', '2019-02-24 17:38:54'),
(49, 3, 1, 74, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>view-suppliers</strong>', NULL, '2019-02-24 17:40:07', '2019-02-24 17:40:07'),
(50, 3, 1, 75, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>edit-suppliers</strong>', NULL, '2019-02-24 17:40:39', '2019-02-24 17:40:39'),
(51, 3, 1, 76, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>create-suppliers</strong>', NULL, '2019-02-24 17:41:08', '2019-02-24 17:41:08'),
(52, 3, 1, 77, 'plus', 'bg-green', 'trans(\"history.backend.permissions.created\") <strong>delete-suppliers</strong>', NULL, '2019-02-24 17:41:39', '2019-02-24 17:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `history_types`
--

CREATE TABLE `history_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_types`
--

INSERT INTO `history_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'User', '2019-01-14 19:17:13', '2019-01-14 19:17:13'),
(2, 'Role', '2019-01-14 19:17:13', '2019-01-14 19:17:13'),
(3, 'Permission', '2019-01-14 19:17:13', '2019-01-14 19:17:13'),
(4, 'Page', '2019-01-14 19:17:13', '2019-01-14 19:17:13'),
(5, 'BlogTag', '2019-01-14 19:17:13', '2019-01-14 19:17:13'),
(6, 'BlogCategory', '2019-01-14 19:17:13', '2019-01-14 19:17:13'),
(7, 'Blog', '2019-01-14 19:17:13', '2019-01-14 19:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `inv_ga_listunit`
--

CREATE TABLE `inv_ga_listunit` (
  `id` int(11) NOT NULL,
  `lunit_id` varchar(10) CHARACTER SET utf8 NOT NULL,
  `lunit_name` varchar(25) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inv_issue`
--

CREATE TABLE `inv_issue` (
  `id` int(11) NOT NULL,
  `issue_id` varchar(25) NOT NULL,
  `issue_date` date NOT NULL,
  `buyer_id` varchar(25) CHARACTER SET utf8 NOT NULL,
  `posted_to_gl` int(11) NOT NULL,
  `remarks` varchar(100) CHARACTER SET utf8 NOT NULL,
  `issue_type` varchar(20) CHARACTER SET utf8 NOT NULL,
  `issue_unit_id` varchar(20) CHARACTER SET utf8 NOT NULL,
  `chk_year_end` int(11) NOT NULL,
  `no_of_material` float NOT NULL,
  `issue_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_issue`
--

INSERT INTO `inv_issue` (`id`, `issue_id`, `issue_date`, `buyer_id`, `posted_to_gl`, `remarks`, `issue_type`, `issue_unit_id`, `chk_year_end`, `no_of_material`, `issue_total`) VALUES
(2, '001', '2019-04-13', '1', 1, 'test', 'Issue', '3', 1, 11, 51),
(3, '002', '2019-05-07', '1', 1, 'test', 'Issue', '3', 1, 5, 45000),
(4, '003', '2019-05-09', '2', 1, 'test', 'Issue', '3', 1, 2, 200);

-- --------------------------------------------------------

--
-- Table structure for table `inv_issuedetail`
--

CREATE TABLE `inv_issuedetail` (
  `id` int(11) NOT NULL,
  `issue_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `material_id` varchar(9) CHARACTER SET utf8 NOT NULL,
  `expense_acct_id` varchar(9) CHARACTER SET utf8 NOT NULL,
  `cost_center` varchar(9) CHARACTER SET utf8 NOT NULL,
  `issue_qty` float NOT NULL,
  `issue_price` float NOT NULL,
  `sl_no` int(11) NOT NULL,
  `total_issue` float NOT NULL,
  `sales_price` float NOT NULL,
  `total_sales` float NOT NULL,
  `sales_profit` int(11) NOT NULL,
  `sales_margin` float NOT NULL,
  `id_serial_id` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_issuedetail`
--

INSERT INTO `inv_issuedetail` (`id`, `issue_id`, `material_id`, `expense_acct_id`, `cost_center`, `issue_qty`, `issue_price`, `sl_no`, `total_issue`, `sales_price`, `total_sales`, `sales_profit`, `sales_margin`, `id_serial_id`) VALUES
(4, '001', '5', '1', '1', 5, 3, 1, 15, 0, 0, 0, 0, '1'),
(5, '001', '4', '1', '1', 6, 6, 1, 36, 0, 0, 0, 0, '1'),
(6, '002', '6', '1', '1', 5, 9000, 1, 45000, 0, 0, 0, 0, '1'),
(7, '003', '7', '1', '1', 2, 100, 1, 200, 0, 0, 0, 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `inv_item_unit`
--

CREATE TABLE `inv_item_unit` (
  `id` int(11) NOT NULL,
  `unit_name` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_item_unit`
--

INSERT INTO `inv_item_unit` (`id`, `unit_name`) VALUES
(1, 'kg'),
(2, 'bag'),
(3, 'pcs');

-- --------------------------------------------------------

--
-- Table structure for table `inv_material`
--

CREATE TABLE `inv_material` (
  `id` int(11) NOT NULL,
  `material_id_code` varchar(10) DEFAULT NULL,
  `material_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `material_sub_id` varchar(25) CHARACTER SET utf8 NOT NULL,
  `material_description` varchar(75) CHARACTER SET utf8 NOT NULL,
  `material_min_stock` int(11) NOT NULL,
  `avg_con_sump` int(11) NOT NULL,
  `lead_time` int(11) NOT NULL,
  `re_order_level` int(11) NOT NULL,
  `qty_unit` varchar(15) CHARACTER SET utf8 NOT NULL,
  `op_balance_qty` int(11) NOT NULL,
  `op_balance_val` int(11) NOT NULL,
  `chk_print` int(11) NOT NULL,
  `cur_qty` int(11) NOT NULL,
  `cur_price` int(11) NOT NULL,
  `cur_value` int(11) NOT NULL,
  `last_issue` date NOT NULL,
  `last_receive` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_material`
--

INSERT INTO `inv_material` (`id`, `material_id_code`, `material_id`, `material_sub_id`, `material_description`, `material_min_stock`, `avg_con_sump`, `lead_time`, `re_order_level`, `qty_unit`, `op_balance_qty`, `op_balance_val`, `chk_print`, `cur_qty`, `cur_price`, `cur_value`, `last_issue`, `last_receive`) VALUES
(4, '001', '21', '3', 'Cement 50 KG', 20, 0, 0, 0, '1', 0, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00'),
(5, '002', '19', '1', 'Acid', 10, 0, 0, 0, '1', 0, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00'),
(6, '003', '21', '3', 'Box Crane 2190', 50, 0, 0, 0, '1', 0, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00'),
(7, '004', '22', '4', 'Tata wheel 1220', 10, 0, 0, 0, '3', 0, 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `inv_materialbalance`
--

CREATE TABLE `inv_materialbalance` (
  `id` int(11) NOT NULL,
  `mb_ref_id` varchar(25) CHARACTER SET utf8 NOT NULL,
  `mb_materialid` varchar(25) CHARACTER SET utf8 NOT NULL,
  `mb_date` date NOT NULL,
  `mbin_qty` float NOT NULL,
  `mbin_val` float NOT NULL,
  `mbout_qty` float NOT NULL,
  `mbout_val` float NOT NULL,
  `mbprice` float NOT NULL,
  `mbtype` varchar(30) CHARACTER SET utf8 NOT NULL,
  `mbserial` float NOT NULL,
  `mbserial_id` varchar(10) CHARACTER SET utf8 NOT NULL,
  `mbunit_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `jvno` varchar(25) CHARACTER SET utf8 NOT NULL,
  `part_no` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_materialbalance`
--

INSERT INTO `inv_materialbalance` (`id`, `mb_ref_id`, `mb_materialid`, `mb_date`, `mbin_qty`, `mbin_val`, `mbout_qty`, `mbout_val`, `mbprice`, `mbtype`, `mbserial`, `mbserial_id`, `mbunit_id`, `jvno`, `part_no`) VALUES
(6, '001', '5', '2019-04-13', 50, 150, 0, 0, 3, 'Receive', 1.1, '0', '1', '001', '123456'),
(7, '001', '4', '2019-04-13', 60, 360, 0, 0, 6, 'Receive', 1.1, '0', '1', '001', '123456'),
(8, '001', '5', '2019-04-13', 0, 0, 5, 15, 3, 'Issue', 1.1, '0', '3', '001', NULL),
(9, '001', '4', '2019-04-13', 0, 0, 6, 36, 6, 'Issue', 1.1, '0', '3', '001', NULL),
(10, '002', '4', '2019-04-21', 10, 60, 0, 0, 6, 'Receive', 1.1, '0', '3', '002', '1235567'),
(11, '003', '6', '2019-05-07', 12, 108000, 0, 0, 9000, 'Receive', 1.1, '0', '3', '003', '212134'),
(12, '002', '6', '2019-05-07', 0, 0, 5, 45000, 9000, 'Issue', 1.1, '0', '3', '002', NULL),
(13, '004', '7', '2019-05-09', 2, 200, 0, 0, 100, 'Receive', 1.1, '0', '3', '004', '9090911'),
(14, '003', '7', '2019-05-09', 0, 0, 2, 200, 100, 'Issue', 1.1, '0', '3', '003', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inv_materialcategory`
--

CREATE TABLE `inv_materialcategory` (
  `id` int(11) NOT NULL,
  `material_sub_id` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `category_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `material_sub_description` varchar(75) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_materialcategory`
--

INSERT INTO `inv_materialcategory` (`id`, `material_sub_id`, `category_id`, `material_sub_description`) VALUES
(1, '001', '19', 'Test 01'),
(2, '002', '19', 'Test 02'),
(3, '003', '21', 'Heavy Device 001'),
(4, '004', '22', 'Tata'),
(5, '005', '22', 'Content');

-- --------------------------------------------------------

--
-- Table structure for table `inv_materialcategorysub`
--

CREATE TABLE `inv_materialcategorysub` (
  `id` int(11) NOT NULL,
  `category_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `category_description` varchar(75) CHARACTER SET utf8 NOT NULL,
  `stock_acct_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `chk_sbalance` int(11) NOT NULL,
  `consumption_ac` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inv_receive`
--

CREATE TABLE `inv_receive` (
  `id` int(11) NOT NULL,
  `mrr_no` varchar(25) CHARACTER SET utf8 NOT NULL,
  `mrr_date` datetime NOT NULL,
  `purchase_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `receive_acct_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `supplier_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `posted_tog` int(11) NOT NULL,
  `remarks` varchar(180) CHARACTER SET utf8 NOT NULL,
  `receive_type` varchar(25) CHARACTER SET utf8 NOT NULL,
  `receive_ware_hosue_id` int(11) NOT NULL,
  `receive_unit_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `chk_year_end` int(11) NOT NULL,
  `receive_total` float NOT NULL,
  `no_of_material` float NOT NULL,
  `jv_no` varchar(25) CHARACTER SET utf8 NOT NULL,
  `part_no` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_receive`
--

INSERT INTO `inv_receive` (`id`, `mrr_no`, `mrr_date`, `purchase_id`, `receive_acct_id`, `supplier_id`, `posted_tog`, `remarks`, `receive_type`, `receive_ware_hosue_id`, `receive_unit_id`, `chk_year_end`, `receive_total`, `no_of_material`, `jv_no`, `part_no`) VALUES
(14, '001', '2019-04-13 09:02:42', '001', '5-11', '1', 1, 'test', 'Receive', 1, '1', 1, 510, 110, '001', '123456'),
(15, '002', '2019-04-21 05:31:12', '002', '5-11', '1', 1, 'test', 'Receive', 3, '3', 1, 997, 10, '002', '1235567'),
(16, '003', '2019-05-07 05:44:09', '003', '5-11', '1', 1, 'test', 'Receive', 3, '3', 1, 108000, 12, '003', '212134'),
(17, '004', '2019-05-09 04:57:01', '004', '5-11', '2', 1, 'test', 'Receive', 3, '3', 1, 200, 2, '004', '9090911');

-- --------------------------------------------------------

--
-- Table structure for table `inv_receivedetail`
--

CREATE TABLE `inv_receivedetail` (
  `id` int(11) NOT NULL,
  `mrr_no` varchar(25) CHARACTER SET utf8 NOT NULL,
  `material_id` varchar(25) CHARACTER SET utf8 NOT NULL,
  `receive_qty` float NOT NULL,
  `unit_price` float NOT NULL,
  `sl_no` int(11) NOT NULL,
  `total_receive` float NOT NULL,
  `rd_serial_id` varchar(20) CHARACTER SET utf8 NOT NULL,
  `part_no` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_receivedetail`
--

INSERT INTO `inv_receivedetail` (`id`, `mrr_no`, `material_id`, `receive_qty`, `unit_price`, `sl_no`, `total_receive`, `rd_serial_id`, `part_no`) VALUES
(29, '001', '5', 50, 3, 1, 150, '1', '123456'),
(30, '001', '4', 60, 6, 1, 360, '1', '123456'),
(31, '002', '4', 10, 99.7, 1, 997, '1', '1235567'),
(32, '003', '6', 12, 9000, 1, 108000, '1', '212134'),
(33, '004', '7', 2, 100, 1, 200, '1', '9090911');

-- --------------------------------------------------------

--
-- Table structure for table `inv_supplier`
--

CREATE TABLE `inv_supplier` (
  `id` int(11) NOT NULL,
  `supplier_id` varchar(20) CHARACTER SET utf8 NOT NULL,
  `supplier_company` varchar(120) CHARACTER SET utf8 NOT NULL,
  `supplier_address` varchar(150) CHARACTER SET utf8 NOT NULL,
  `supplier_city` varchar(50) CHARACTER SET utf8 NOT NULL,
  `supplier_country` varchar(50) CHARACTER SET utf8 NOT NULL,
  `contact_person` varchar(75) CHARACTER SET utf8 NOT NULL,
  `sposition` varchar(75) CHARACTER SET utf8 NOT NULL,
  `supplier_phone` varchar(18) CHARACTER SET utf8 NOT NULL,
  `supplier_op_balance` float NOT NULL,
  `cc` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inv_supplierbalance`
--

CREATE TABLE `inv_supplierbalance` (
  `id` int(11) NOT NULL,
  `sb_ref_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `sb_date` date NOT NULL,
  `sb_supplier_id` varchar(15) CHARACTER SET utf8 NOT NULL,
  `sb_dr_amount` float NOT NULL,
  `sb_cr_amount` float NOT NULL,
  `sb_remark` varchar(175) CHARACTER SET utf8 NOT NULL,
  `sb_partac_id` varchar(25) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inv_warehosueinfo`
--

CREATE TABLE `inv_warehosueinfo` (
  `id` int(11) NOT NULL,
  `ware_hosue_id` int(11) NOT NULL,
  `ware_hosue_name` varchar(75) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(400) DEFAULT NULL,
  `code` varchar(4) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `code`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(19, 'Raw Materials', '01', 1, NULL, 2019, '2019-03-30 01:59:40', NULL),
(20, 'Equipment', '02', 1, NULL, 2019, '2019-03-30 01:59:59', NULL),
(21, 'Port Device', '03', 1, NULL, 2019, '2019-04-01 23:26:49', NULL),
(22, 'Wheel', '04', 1, NULL, 2019, '2019-05-08 22:47:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` enum('backend','frontend') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `items` text COLLATE utf8mb4_unicode_ci,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `type`, `name`, `items`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'backend', 'Backend Sidebar Menu', '[{\"view_permission_id\":\"view-access-management\",\"icon\":\"fa-users\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"\",\"name\":\"Access Management\",\"id\":11,\"content\":\"Access Management\",\"children\":[{\"view_permission_id\":\"view-user-management\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.access.user.index\",\"name\":\"User Management\",\"id\":12,\"content\":\"User Management\"},{\"view_permission_id\":\"view-role-management\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.access.role.index\",\"name\":\"Role Management\",\"id\":13,\"content\":\"Role Management\"},{\"view_permission_id\":\"view-permission-management\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.access.permission.index\",\"name\":\"Permission Management\",\"id\":14,\"content\":\"Permission Management\"}]},{\"view_permission_id\":\"view-module\",\"icon\":\"fa-wrench\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.modules.index\",\"name\":\"Module\",\"id\":1,\"content\":\"Module\"},{\"view_permission_id\":\"view-menu\",\"icon\":\"fa-bars\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.menus.index\",\"name\":\"Menus\",\"id\":3,\"content\":\"Menus\"},{\"view_permission_id\":\"edit-settings\",\"icon\":\"fa-gear\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.settings.edit?id=1\",\"name\":\"Settings\",\"id\":9,\"content\":\"Settings\"},{\"view_permission_id\":\"view-projects\",\"icon\":\"fa fa-tasks\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.projects.index\",\"name\":\"Projects\",\"id\":17,\"content\":\"Projects\"},{\"id\":18,\"name\":\"Items\",\"url\":\"admin.items.index\",\"url_type\":\"route\",\"open_in_new_tab\":0,\"icon\":\"fa fa-get-pocket\",\"view_permission_id\":\"view-items\",\"content\":\"Items\"},{\"view_permission_id\":\"view-suppliers\",\"icon\":\"fa fa-user-circle\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.suppliers.index\",\"name\":\"Suppliers\",\"id\":22,\"content\":\"Suppliers\"},{\"id\":19,\"name\":\"Products Receive\",\"url\":\"admin.products.index\",\"url_type\":\"route\",\"open_in_new_tab\":0,\"icon\":\"fa fa-gift\",\"view_permission_id\":\"view-products\",\"content\":\"Products Receive\",\"children\":[{\"view_permission_id\":\"create-product-receive\",\"icon\":\"fa fa-cube\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.product_receive.create\",\"name\":\"Receive Form\",\"id\":20,\"content\":\"Receive Form\"},{\"id\":23,\"name\":\"Receive List\",\"url\":\"admin.product_receive.product_receive_list\",\"url_type\":\"route\",\"open_in_new_tab\":0,\"icon\":\"fa fa-truck\",\"view_permission_id\":\"view-reports\",\"content\":\"Receive List\"}]},{\"id\":25,\"name\":\"Product Issue\",\"url\":\"\",\"url_type\":\"static\",\"open_in_new_tab\":0,\"icon\":\"fa fa-truck\",\"view_permission_id\":\"view-reports\",\"content\":\"Product Issue\",\"children\":[{\"view_permission_id\":\"create-product-challan\",\"icon\":\"fa fa-truck\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.product_challan.create\",\"name\":\"Issue Form\",\"id\":21,\"content\":\"Issue Form\"},{\"id\":26,\"name\":\"Issue List\",\"url\":\"admin.product_challan.product_issue_list\",\"url_type\":\"route\",\"open_in_new_tab\":0,\"icon\":\"fa fa-truck\",\"view_permission_id\":\"view-reports\",\"content\":\"Issue List\"}]},{\"id\":15,\"name\":\"Plant Equipment\",\"url\":\"admin.plantEquipment.index\",\"url_type\":\"route\",\"open_in_new_tab\":0,\"icon\":\"fa fa-trello\",\"view_permission_id\":\"view-plant-equipment\",\"content\":\"Plant Equipment\"},{\"view_permission_id\":\"view-reports\",\"icon\":\"fa fa-bar-chart\",\"open_in_new_tab\":0,\"url_type\":\"static\",\"url\":\"\",\"name\":\"Reports\",\"id\":16,\"content\":\"Reports\",\"children\":[{\"id\":27,\"name\":\"Products\",\"url\":\"admin.reports.index\",\"url_type\":\"route\",\"open_in_new_tab\":0,\"icon\":\"fa fa-bar-chart\",\"view_permission_id\":\"view-reports\",\"content\":\"Products\"},{\"id\":28,\"name\":\"Stock Management\",\"url\":\"admin.reports.stock-management\",\"url_type\":\"route\",\"open_in_new_tab\":0,\"icon\":\"fa fa-bar-chart\",\"view_permission_id\":\"view-reports\",\"content\":\"Stock Management\"}]}]', 1, NULL, '2019-01-14 19:17:14', '2019-04-26 19:52:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_11_02_060149_create_blog_categories_table', 1),
(2, '2017_11_02_060149_create_blog_map_categories_table', 1),
(3, '2017_11_02_060149_create_blog_map_tags_table', 1),
(4, '2017_11_02_060149_create_blog_tags_table', 1),
(5, '2017_11_02_060149_create_blogs_table', 1),
(6, '2017_11_02_060149_create_faqs_table', 1),
(7, '2017_11_02_060149_create_history_table', 1),
(8, '2017_11_02_060149_create_history_types_table', 1),
(9, '2017_11_02_060149_create_modules_table', 1),
(10, '2017_11_02_060149_create_notifications_table', 1),
(11, '2017_11_02_060149_create_pages_table', 1),
(12, '2017_11_02_060149_create_password_resets_table', 1),
(13, '2017_11_02_060149_create_permission_role_table', 1),
(14, '2017_11_02_060149_create_permission_user_table', 1),
(15, '2017_11_02_060149_create_permissions_table', 1),
(16, '2017_11_02_060149_create_role_user_table', 1),
(17, '2017_11_02_060149_create_roles_table', 1),
(18, '2017_11_02_060149_create_sessions_table', 1),
(19, '2017_11_02_060149_create_settings_table', 1),
(20, '2017_11_02_060149_create_social_logins_table', 1),
(21, '2017_11_02_060149_create_users_table', 1),
(22, '2017_11_02_060152_add_foreign_keys_to_history_table', 1),
(23, '2017_11_02_060152_add_foreign_keys_to_notifications_table', 1),
(24, '2017_11_02_060152_add_foreign_keys_to_permission_role_table', 1),
(25, '2017_11_02_060152_add_foreign_keys_to_permission_user_table', 1),
(26, '2017_11_02_060152_add_foreign_keys_to_role_user_table', 1),
(27, '2017_11_02_060152_add_foreign_keys_to_social_logins_table', 1),
(28, '2017_12_10_122555_create_menus_table', 1),
(29, '2017_12_24_042039_add_null_constraint_on_created_by_on_user_table', 2),
(30, '2017_12_28_005822_add_null_constraint_on_created_by_on_role_table', 2),
(31, '2017_12_28_010952_add_null_constraint_on_created_by_on_permission_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `view_permission_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'view_route',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `view_permission_id`, `name`, `url`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'view-access-management', 'Access Management', NULL, 1, NULL, '2019-01-14 19:17:14', NULL),
(2, 'view-user-management', 'User Management', 'admin.access.user.index', 1, NULL, '2019-01-14 19:17:14', NULL),
(3, 'view-role-management', 'Role Management', 'admin.access.role.index', 1, NULL, '2019-01-14 19:17:14', NULL),
(4, 'view-permission-management', 'Permission Management', 'admin.access.permission.index', 1, NULL, '2019-01-14 19:17:14', NULL),
(5, 'view-menu', 'Menus', 'admin.menus.index', 1, NULL, '2019-01-14 19:17:14', NULL),
(6, 'view-module', 'Module', 'admin.modules.index', 1, NULL, '2019-01-14 19:17:14', NULL),
(7, 'view-page', 'Pages', 'admin.pages.index', 1, NULL, '2019-01-14 19:17:14', NULL),
(8, 'edit-settings', 'Settings', 'admin.settings.edit', 1, NULL, '2019-01-14 19:17:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 - Dashboard , 2 - Email , 3 - Both',
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `user_id`, `type`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 16:50:38', '2019-01-21 23:49:53'),
(2, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 16:53:34', '2019-01-21 23:49:51'),
(3, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 17:05:32', '2019-01-21 23:49:51'),
(4, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 18:28:46', '2019-01-21 23:49:51'),
(5, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 18:28:54', '2019-01-21 23:49:51'),
(6, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 19:03:57', '2019-01-21 23:49:51'),
(7, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 19:24:51', '2019-01-21 23:49:47'),
(8, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 19:30:11', '2019-01-21 23:49:47'),
(9, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 21:01:53', '2019-01-21 23:49:47'),
(10, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 21:28:19', '2019-01-21 23:49:47'),
(11, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 21:57:31', '2019-01-21 23:49:47'),
(12, 'User Logged In: Viral', 1, 1, 1, '2019-01-15 23:34:56', '2019-01-21 23:49:41'),
(13, 'User Logged In: Viral', 1, 1, 1, '2019-01-17 14:26:27', '2019-01-21 23:49:41'),
(14, 'User Logged In: Viral', 1, 1, 1, '2019-01-17 14:49:14', '2019-01-21 23:49:41'),
(15, 'User Logged In: Viral', 1, 1, 1, '2019-01-19 17:35:26', '2019-01-21 23:49:41'),
(16, 'User Logged In: Viral', 1, 1, 1, '2019-01-21 15:34:52', '2019-01-21 23:49:41'),
(17, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 15:54:14', '2019-01-21 23:49:29'),
(18, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 17:42:13', '2019-01-21 23:49:29'),
(19, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 17:54:34', '2019-01-21 23:49:29'),
(20, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 19:08:42', '2019-01-21 23:49:29'),
(21, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 19:21:36', '2019-01-21 23:49:29'),
(22, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 22:11:22', '2019-01-21 23:49:56'),
(23, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 23:01:33', '2019-01-21 23:49:56'),
(24, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 23:12:42', '2019-01-21 23:49:56'),
(25, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 23:31:13', '2019-01-21 23:49:56'),
(26, 'User Logged In: Admin', 1, 1, 1, '2019-01-21 23:44:46', '2019-01-21 23:49:56'),
(27, 'User Logged In: Admin', 1, 1, 1, '2019-01-22 14:55:00', '2019-02-01 15:50:54'),
(28, 'User Logged In: Admin', 1, 1, 1, '2019-01-22 15:42:42', '2019-02-01 15:50:54'),
(29, 'User Logged In: Admin', 1, 1, 1, '2019-01-22 16:02:34', '2019-02-01 15:50:54'),
(30, 'User Logged In: Admin', 1, 1, 1, '2019-01-22 16:48:50', '2019-02-01 15:50:54'),
(31, 'User Logged In: Admin', 1, 1, 1, '2019-01-22 19:05:46', '2019-02-01 15:50:52'),
(32, 'User Logged In: Admin', 1, 1, 1, '2019-01-22 20:29:09', '2019-02-01 15:50:52'),
(33, 'User Logged In: Admin', 1, 1, 1, '2019-01-22 20:56:33', '2019-02-01 15:50:52'),
(34, 'User Logged In: Admin', 1, 1, 1, '2019-01-22 22:15:00', '2019-02-01 15:50:52'),
(35, 'User Logged In: Admin', 1, 1, 1, '2019-01-22 22:40:39', '2019-02-01 15:50:52'),
(36, 'User Logged In: Admin', 1, 1, 1, '2019-01-23 15:15:31', '2019-02-01 15:50:50'),
(37, 'User Logged In: Admin', 1, 1, 1, '2019-01-23 15:56:35', '2019-02-01 15:50:50'),
(38, 'User Logged In: Admin', 1, 1, 1, '2019-01-23 16:21:32', '2019-02-01 15:50:50'),
(39, 'User Logged In: Admin', 1, 1, 1, '2019-01-23 16:51:10', '2019-02-01 15:50:50'),
(40, 'User Logged In: Admin', 1, 1, 1, '2019-02-01 15:50:13', '2019-02-01 15:50:54'),
(41, 'User Logged In: Admin', 1, 1, 0, '2019-02-03 15:06:56', NULL),
(42, 'User Logged In: Admin', 1, 1, 0, '2019-02-03 15:27:37', NULL),
(43, 'User Logged In: Admin', 1, 1, 0, '2019-02-03 15:41:48', NULL),
(44, 'User Logged In: Admin', 1, 1, 0, '2019-02-03 16:51:42', NULL),
(45, 'User Logged In: Admin', 1, 1, 1, '2019-02-03 17:26:55', '2019-02-09 15:33:04'),
(46, 'User Logged In: Admin', 1, 1, 1, '2019-02-03 17:31:30', '2019-02-09 15:33:04'),
(47, 'User Logged In: Admin', 1, 1, 1, '2019-02-03 17:56:12', '2019-02-09 15:33:04'),
(48, 'User Logged In: Admin', 1, 1, 1, '2019-02-03 18:32:44', '2019-02-09 15:33:04'),
(49, 'User Logged In: Admin', 1, 1, 1, '2019-02-03 18:43:13', '2019-02-09 15:33:04'),
(50, 'User Logged In: Admin', 1, 1, 1, '2019-02-03 19:03:36', '2019-02-09 15:33:01'),
(51, 'User Logged In: Admin', 1, 1, 1, '2019-02-03 21:13:37', '2019-02-09 15:33:01'),
(52, 'User Logged In: Rashed', 1, 1, 1, '2019-02-03 21:19:32', '2019-02-09 15:33:01'),
(53, 'User Logged In: Admin', 1, 1, 1, '2019-02-03 21:20:42', '2019-02-04 21:14:34'),
(54, 'User Logged In: Rashed', 1, 1, 1, '2019-02-03 21:21:20', '2019-02-04 21:14:34'),
(55, 'User Logged In: Admin', 1, 1, 1, '2019-02-03 21:37:59', '2019-02-04 21:14:34'),
(56, 'User Logged In: Admin', 1, 1, 1, '2019-02-04 20:28:16', '2019-02-04 21:14:34'),
(57, 'User Logged In: Admin', 1, 1, 1, '2019-02-04 21:14:19', '2019-02-04 21:14:34'),
(58, 'User Logged In: Admin', 1, 1, 1, '2019-02-04 21:27:24', '2019-02-09 15:33:01'),
(59, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 15:09:56', '2019-02-09 15:33:01'),
(60, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 16:15:22', NULL),
(61, 'User Logged In: Rashed', 1, 1, 0, '2019-02-09 16:26:39', NULL),
(62, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 16:29:08', NULL),
(63, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 17:14:20', NULL),
(64, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 18:15:05', NULL),
(65, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 18:34:48', NULL),
(66, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 18:49:15', '2019-02-09 23:05:06'),
(67, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 19:10:08', '2019-02-09 23:05:06'),
(68, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 19:32:07', '2019-02-09 23:05:06'),
(69, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 20:31:57', '2019-02-09 23:05:06'),
(70, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 20:44:02', '2019-02-09 23:05:06'),
(71, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 21:05:42', '2019-02-09 23:04:52'),
(72, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 21:29:10', '2019-02-09 23:04:52'),
(73, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 21:43:15', '2019-02-09 23:04:52'),
(74, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 22:22:52', '2019-02-09 23:04:52'),
(75, 'User Logged In: Admin', 1, 1, 1, '2019-02-09 22:52:17', '2019-02-09 23:04:52'),
(76, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 23:37:31', NULL),
(77, 'User Logged In: Admin', 1, 1, 0, '2019-02-09 23:50:24', NULL),
(78, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 02:54:02', NULL),
(79, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 03:25:38', NULL),
(80, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 03:57:31', NULL),
(81, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 04:27:53', NULL),
(82, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 08:58:58', NULL),
(83, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 08:59:05', NULL),
(84, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 09:28:03', NULL),
(85, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 10:17:01', NULL),
(86, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 10:55:44', NULL),
(87, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 11:33:59', NULL),
(88, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 11:54:21', NULL),
(89, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 12:11:04', NULL),
(90, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 12:19:54', NULL),
(91, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 12:23:07', NULL),
(92, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 12:23:29', NULL),
(93, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 15:37:49', NULL),
(94, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 15:38:01', NULL),
(95, 'User Logged In: Admin', 1, 1, 0, '2019-02-10 16:06:30', NULL),
(96, 'User Logged In: Admin', 1, 1, 0, '2019-02-11 18:35:53', NULL),
(97, 'User Logged In: Admin', 1, 1, 0, '2019-02-11 18:36:29', NULL),
(98, 'User Logged In: Rashed', 1, 1, 0, '2019-02-11 18:40:08', NULL),
(99, 'User Logged In: Admin', 1, 1, 0, '2019-02-11 18:40:35', NULL),
(100, 'User Logged In: Rashed', 1, 1, 0, '2019-02-11 18:42:29', NULL),
(101, 'User Logged In: Rashed', 1, 1, 0, '2019-02-22 21:19:36', NULL),
(102, 'User Logged In: Admin', 1, 1, 0, '2019-02-22 21:29:38', NULL),
(103, 'User Logged In: Admin', 1, 1, 0, '2019-02-22 21:54:49', NULL),
(104, 'User Logged In: Admin', 1, 1, 0, '2019-02-23 05:47:39', NULL),
(105, 'User Logged In: Admin', 1, 1, 0, '2019-02-23 06:08:30', NULL),
(106, 'User Logged In: Admin', 1, 1, 0, '2019-02-23 07:08:39', NULL),
(107, 'User Logged In: Admin', 1, 1, 0, '2019-02-23 08:50:52', NULL),
(108, 'User Logged In: Admin', 1, 1, 0, '2019-02-23 09:17:13', NULL),
(109, 'User Logged In: Admin', 1, 1, 0, '2019-02-23 09:31:27', NULL),
(110, 'User Logged In: Admin', 1, 1, 0, '2019-02-23 17:54:42', NULL),
(111, 'User Logged In: Admin', 1, 1, 0, '2019-02-23 18:21:20', NULL),
(112, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 17:02:34', NULL),
(113, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 17:10:57', NULL),
(114, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 17:16:09', NULL),
(115, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 17:19:27', NULL),
(116, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 17:19:42', NULL),
(117, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 17:22:52', NULL),
(118, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 18:17:26', NULL),
(119, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 18:44:58', NULL),
(120, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 19:16:34', NULL),
(121, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 19:36:08', NULL),
(122, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 20:38:19', NULL),
(123, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 21:18:22', NULL),
(124, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 22:51:32', NULL),
(125, 'User Logged In: Admin', 1, 1, 0, '2019-02-24 23:33:07', NULL),
(126, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 02:59:45', NULL),
(127, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 03:14:57', NULL),
(128, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 13:45:32', NULL),
(129, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 16:38:58', NULL),
(130, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 17:13:14', NULL),
(131, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 17:36:39', NULL),
(132, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 18:03:46', NULL),
(133, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 18:27:30', NULL),
(134, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 18:50:56', NULL),
(135, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 20:53:22', NULL),
(136, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 22:28:29', NULL),
(137, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 23:19:55', NULL),
(138, 'User Logged In: Admin', 1, 1, 0, '2019-02-25 23:35:35', NULL),
(139, 'User Logged In: Admin', 1, 1, 0, '2019-02-26 19:11:21', NULL),
(140, 'User Logged In: Admin', 1, 1, 0, '2019-02-26 20:54:46', NULL),
(141, 'User Logged In: Admin', 1, 1, 0, '2019-02-26 20:54:51', NULL),
(142, 'User Logged In: Admin', 1, 1, 0, '2019-03-04 02:55:08', NULL),
(143, 'User Logged In: Admin', 1, 1, 0, '2019-03-04 03:26:35', NULL),
(144, 'User Logged In: Admin', 1, 1, 0, '2019-03-04 06:37:06', NULL),
(145, 'User Logged In: Admin', 1, 1, 0, '2019-03-06 22:34:28', NULL),
(146, 'User Logged In: Admin', 1, 1, 0, '2019-03-09 02:36:57', NULL),
(147, 'User Logged In: Admin', 1, 1, 0, '2019-03-11 21:46:32', NULL),
(148, 'User Logged In: Admin', 1, 1, 0, '2019-03-18 02:07:40', NULL),
(149, 'User Logged In: Admin', 1, 1, 0, '2019-03-18 02:55:31', NULL),
(150, 'User Logged In: Admin', 1, 1, 0, '2019-03-18 21:34:29', NULL),
(151, 'User Logged In: Admin', 1, 1, 0, '2019-03-19 03:44:58', NULL),
(152, 'User Logged In: Admin', 1, 1, 0, '2019-03-19 20:48:25', NULL),
(153, 'User Logged In: Admin', 1, 1, 0, '2019-03-20 22:19:52', NULL),
(154, 'User Logged In: Admin', 1, 1, 0, '2019-03-23 00:12:27', NULL),
(155, 'User Logged In: Admin', 1, 1, 0, '2019-03-24 22:23:42', NULL),
(156, 'User Logged In: Admin', 1, 1, 0, '2019-03-26 23:28:44', NULL),
(157, 'User Logged In: Admin', 1, 1, 0, '2019-03-27 20:36:15', NULL),
(158, 'User Logged In: Admin', 1, 1, 0, '2019-03-28 01:42:10', NULL),
(159, 'User Logged In: Admin', 1, 1, 0, '2019-03-29 22:47:27', NULL),
(160, 'User Logged In: Admin', 1, 1, 0, '2019-03-31 21:18:42', NULL),
(161, 'User Logged In: Admin', 1, 1, 0, '2019-04-01 03:14:19', NULL),
(162, 'User Logged In: Admin', 1, 1, 0, '2019-04-01 22:59:31', NULL),
(163, 'User Logged In: Admin', 1, 1, 0, '2019-04-02 03:16:40', NULL),
(164, 'User Logged In: Admin', 1, 1, 0, '2019-04-02 21:52:00', NULL),
(165, 'User Logged In: Admin', 1, 1, 0, '2019-04-03 03:28:03', NULL),
(166, 'User Logged In: Admin', 1, 1, 0, '2019-04-03 09:35:50', NULL),
(167, 'User Logged In: Admin', 1, 1, 0, '2019-04-03 21:48:55', NULL),
(168, 'User Logged In: Admin', 1, 1, 0, '2019-04-04 21:19:25', NULL),
(169, 'User Logged In: Admin', 1, 1, 0, '2019-04-04 23:32:12', NULL),
(170, 'User Logged In: Admin', 1, 1, 0, '2019-04-05 01:36:28', NULL),
(171, 'User Logged In: Admin', 1, 1, 0, '2019-04-05 22:16:13', NULL),
(172, 'User Logged In: Admin', 1, 1, 0, '2019-04-06 21:43:12', NULL),
(173, 'User Logged In: Admin', 1, 1, 0, '2019-04-07 20:46:00', NULL),
(174, 'User Logged In: Admin', 1, 1, 0, '2019-04-08 03:44:37', NULL),
(175, 'User Logged In: Admin', 1, 1, 0, '2019-04-08 04:07:09', NULL),
(176, 'User Logged In: Admin', 1, 1, 0, '2019-04-08 23:15:59', NULL),
(177, 'User Logged In: Admin', 1, 1, 0, '2019-04-09 02:09:51', NULL),
(178, 'User Logged In: Admin', 1, 1, 0, '2019-04-09 22:37:47', NULL),
(179, 'User Logged In: Admin', 1, 1, 0, '2019-04-10 04:54:52', NULL),
(180, 'User Logged In: Admin', 1, 1, 0, '2019-04-13 00:19:24', NULL),
(181, 'User Logged In: Admin', 1, 1, 0, '2019-04-15 21:44:52', NULL),
(182, 'User Logged In: Admin', 1, 1, 0, '2019-04-16 02:23:59', NULL),
(183, 'User Logged In: Admin', 1, 1, 0, '2019-04-16 05:12:55', NULL),
(184, 'User Logged In: Admin', 1, 1, 0, '2019-04-20 22:13:16', NULL),
(185, 'User Logged In: Admin', 1, 1, 0, '2019-04-23 03:53:48', NULL),
(186, 'User Logged In: Admin', 1, 1, 0, '2019-04-23 23:22:26', NULL),
(187, 'User Logged In: Admin', 1, 1, 0, '2019-04-24 05:24:06', NULL),
(188, 'User Logged In: Admin', 1, 1, 0, '2019-04-25 01:36:08', NULL),
(189, 'User Logged In: Admin', 1, 1, 0, '2019-04-25 05:30:54', NULL),
(190, 'User Logged In: Admin', 1, 1, 0, '2019-04-26 19:06:07', NULL),
(191, 'User Logged In: Admin', 1, 1, 0, '2019-04-27 00:28:53', NULL),
(192, 'User Logged In: Admin', 1, 1, 0, '2019-04-27 02:21:19', NULL),
(193, 'User Logged In: Admin', 1, 1, 0, '2019-04-27 21:49:04', NULL),
(194, 'User Logged In: Admin', 1, 1, 0, '2019-04-28 00:42:50', NULL),
(195, 'User Logged In: Admin', 1, 1, 0, '2019-04-28 02:05:11', NULL),
(196, 'User Logged In: Admin', 1, 1, 0, '2019-05-05 22:03:49', NULL),
(197, 'User Logged In: Admin', 1, 1, 0, '2019-05-06 02:45:29', NULL),
(198, 'User Logged In: Admin', 1, 1, 0, '2019-05-06 22:09:31', NULL),
(199, 'User Logged In: Admin', 1, 1, 0, '2019-05-07 02:26:46', NULL),
(200, 'User Logged In: Admin', 1, 1, 0, '2019-05-07 22:02:50', NULL),
(201, 'User Logged In: Admin', 1, 1, 0, '2019-05-08 22:18:28', NULL),
(202, 'User Logged In: Admin', 1, 1, 0, '2019-05-08 22:40:26', NULL),
(203, 'User Logged In: Admin', 1, 1, 0, '2019-05-09 01:42:40', NULL),
(204, 'User Logged In: Admin', 1, 1, 0, '2019-05-10 23:26:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `cannonical_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `page_slug`, `description`, `cannonical_link`, `seo_title`, `seo_keyword`, `seo_description`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Terms and conditions', 'terms-and-conditions', 'terms and conditions', NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-01-14 19:17:14', '2019-01-14 19:17:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `sort`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'view-backend', 'View Backend', 1, 1, 1, NULL, '2019-01-14 19:17:03', '2019-01-14 19:17:03', NULL),
(2, 'view-frontend', 'View Frontend', 2, 1, 1, NULL, '2019-01-14 19:17:03', '2019-01-14 19:17:03', NULL),
(3, 'view-access-management', 'View Access Management', 3, 1, 1, NULL, '2019-01-14 19:17:03', '2019-01-14 19:17:03', NULL),
(4, 'view-user-management', 'View User Management', 4, 1, 1, NULL, '2019-01-14 19:17:03', '2019-01-14 19:17:03', NULL),
(5, 'view-active-user', 'View Active User', 5, 1, 1, NULL, '2019-01-14 19:17:04', '2019-01-14 19:17:04', NULL),
(6, 'view-deactive-user', 'View Deactive User', 6, 1, 1, NULL, '2019-01-14 19:17:04', '2019-01-14 19:17:04', NULL),
(7, 'view-deleted-user', 'View Deleted User', 7, 1, 1, NULL, '2019-01-14 19:17:04', '2019-01-14 19:17:04', NULL),
(8, 'show-user', 'Show User Details', 8, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(9, 'create-user', 'Create User', 9, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(10, 'edit-user', 'Edit User', 9, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(11, 'delete-user', 'Delete User', 10, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(12, 'activate-user', 'Activate User', 11, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(13, 'deactivate-user', 'Deactivate User', 12, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(14, 'login-as-user', 'Login As User', 13, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(15, 'clear-user-session', 'Clear User Session', 14, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(16, 'view-role-management', 'View Role Management', 15, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(17, 'create-role', 'Create Role', 16, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(18, 'edit-role', 'Edit Role', 17, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(19, 'delete-role', 'Delete Role', 18, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(20, 'view-permission-management', 'View Permission Management', 19, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(21, 'create-permission', 'Create Permission', 20, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(22, 'edit-permission', 'Edit Permission', 21, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(23, 'delete-permission', 'Delete Permission', 22, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(24, 'view-page', 'View Page', 23, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(25, 'create-page', 'Create Page', 24, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(26, 'edit-page', 'Edit Page', 25, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(27, 'delete-page', 'Delete Page', 26, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(28, 'view-email-template', 'View Email Templates', 27, 1, 1, NULL, '2019-01-14 19:17:05', '2019-01-14 19:17:05', NULL),
(29, 'create-email-template', 'Create Email Templates', 28, 1, 1, NULL, '2019-01-14 19:17:06', '2019-01-14 19:17:06', NULL),
(30, 'edit-email-template', 'Edit Email Templates', 29, 1, 1, NULL, '2019-01-14 19:17:06', '2019-01-14 19:17:06', NULL),
(31, 'delete-email-template', 'Delete Email Templates', 30, 1, 1, NULL, '2019-01-14 19:17:06', '2019-01-14 19:17:06', NULL),
(32, 'edit-settings', 'Edit Settings', 31, 1, 1, NULL, '2019-01-14 19:17:06', '2019-01-14 19:17:06', NULL),
(33, 'view-blog-category', 'View Blog Categories Management', 32, 1, 1, NULL, '2019-01-14 19:17:06', '2019-02-24 17:34:13', '2019-02-24 17:34:13'),
(34, 'create-blog-category', 'Create Blog Category', 33, 1, 1, NULL, '2019-01-14 19:17:07', '2019-02-24 17:34:24', '2019-02-24 17:34:24'),
(35, 'edit-blog-category', 'Edit Blog Category', 34, 1, 1, NULL, '2019-01-14 19:17:07', '2019-02-24 17:34:36', '2019-02-24 17:34:36'),
(36, 'delete-blog-category', 'Delete Blog Category', 35, 1, 1, NULL, '2019-01-14 19:17:07', '2019-02-24 17:34:47', '2019-02-24 17:34:47'),
(37, 'view-blog-tag', 'View Blog Tags Management', 36, 1, 1, NULL, '2019-01-14 19:17:07', '2019-02-24 17:34:57', '2019-02-24 17:34:57'),
(38, 'create-blog-tag', 'Create Blog Tag', 37, 1, 1, NULL, '2019-01-14 19:17:07', '2019-02-24 17:35:08', '2019-02-24 17:35:08'),
(39, 'edit-blog-tag', 'Edit Blog Tag', 38, 1, 1, NULL, '2019-01-14 19:17:07', '2019-02-24 17:35:19', '2019-02-24 17:35:19'),
(40, 'delete-blog-tag', 'Delete Blog Tag', 39, 1, 1, NULL, '2019-01-14 19:17:07', '2019-02-24 17:35:29', '2019-02-24 17:35:29'),
(41, 'view-blog', 'View Blogs Management', 40, 1, 1, NULL, '2019-01-14 19:17:07', '2019-02-24 17:35:52', '2019-02-24 17:35:52'),
(42, 'create-blog', 'Create Blog', 41, 1, 1, NULL, '2019-01-14 19:17:07', '2019-02-24 17:36:14', '2019-02-24 17:36:14'),
(43, 'edit-blog', 'Edit Blog', 42, 1, 1, NULL, '2019-01-14 19:17:07', '2019-02-24 17:36:03', '2019-02-24 17:36:03'),
(44, 'delete-blog', 'Delete Blog', 43, 1, 1, NULL, '2019-01-14 19:17:07', '2019-02-24 17:37:55', '2019-02-24 17:37:55'),
(45, 'view-faq', 'View FAQ Management', 44, 1, 1, NULL, '2019-01-14 19:17:07', '2019-02-24 17:38:04', '2019-02-24 17:38:04'),
(46, 'create-faq', 'Create FAQ', 45, 1, 1, NULL, '2019-01-14 19:17:07', '2019-02-24 17:38:12', '2019-02-24 17:38:12'),
(47, 'edit-faq', 'Edit FAQ', 46, 1, 1, NULL, '2019-01-14 19:17:07', '2019-02-24 17:38:21', '2019-02-24 17:38:21'),
(48, 'delete-faq', 'Delete FAQ', 47, 1, 1, NULL, '2019-01-14 19:17:07', '2019-02-24 17:38:54', '2019-02-24 17:38:54'),
(49, 'create-plant-equipment', 'Create Plant Equipment', 31, 1, 1, 1, '2019-01-21 23:42:35', '2019-01-21 23:43:48', NULL),
(50, 'edit-plant-equipment', 'Edit Plant Equipment', 32, 1, 1, NULL, '2019-02-09 16:20:08', '2019-02-09 16:20:08', NULL),
(51, 'view-plant-equipment', 'View Plant Equipment', 33, 1, 1, NULL, '2019-02-09 16:21:08', '2019-02-09 16:21:08', NULL),
(52, 'delete-plant-equipment', 'Delete Plant Equipment', 34, 1, 1, NULL, '2019-02-09 16:22:25', '2019-02-09 16:22:25', NULL),
(53, 'view-reports', 'View Reports', 40, 1, 1, NULL, '2019-02-09 16:48:43', '2019-02-09 16:48:43', NULL),
(54, 'create-projects', 'Create Projects', 41, 1, 1, NULL, '2019-02-09 20:33:20', '2019-02-09 20:33:20', NULL),
(55, 'edit-projects', 'Edit Projects', 33, 1, 1, NULL, '2019-02-09 20:46:59', '2019-02-09 20:46:59', NULL),
(56, 'view-projects', 'View Projects', 34, 1, 1, NULL, '2019-02-09 21:12:35', '2019-02-09 21:12:35', NULL),
(57, 'delete-projects', 'Delete Projects', 38, 1, 1, NULL, '2019-02-09 21:13:20', '2019-02-09 21:13:20', NULL),
(58, 'create-items', 'Create Items', 45, 1, 1, NULL, '2019-02-23 06:14:05', '2019-02-23 06:14:05', NULL),
(59, 'edit-items', 'Edit Items', 46, 1, 1, NULL, '2019-02-23 06:15:10', '2019-02-23 06:15:10', NULL),
(60, 'view-items', 'View Items', 47, 1, 1, NULL, '2019-02-23 06:15:38', '2019-02-23 06:15:38', NULL),
(61, 'delete-items', 'Delete Items', 48, 1, 1, NULL, '2019-02-23 06:16:35', '2019-02-23 06:16:35', NULL),
(62, 'view-products', 'View Products', 48, 1, 1, NULL, '2019-02-23 07:09:38', '2019-02-23 07:09:38', NULL),
(63, 'create-products', 'Create Products', 49, 1, 1, NULL, '2019-02-23 07:10:22', '2019-02-23 07:10:22', NULL),
(64, 'edit-products', 'Edit Products', 49, 1, 1, 1, '2019-02-23 07:10:55', '2019-02-23 07:11:59', NULL),
(65, 'delete-products', 'Delete Products', 50, 1, 1, 1, '2019-02-23 07:11:18', '2019-02-23 07:11:35', NULL),
(66, 'create-product-receive', 'Create Product Receive', 51, 1, 1, NULL, '2019-02-23 08:51:48', '2019-02-23 08:51:48', NULL),
(67, 'edit-product-receive', 'Edit Product Receive', 52, 1, 1, NULL, '2019-02-23 08:52:36', '2019-02-23 08:52:36', NULL),
(68, 'view-product-receive', 'View Product Receive', 53, 1, 1, NULL, '2019-02-23 08:53:22', '2019-02-23 08:53:22', NULL),
(69, 'delete-product-receive', 'Delete Product Receive', 54, 1, 1, NULL, '2019-02-23 08:54:06', '2019-02-23 08:54:06', NULL),
(70, 'create-project-challan', 'Create Project Challan', 61, 1, 1, NULL, '2019-02-23 10:14:49', '2019-02-23 10:14:49', NULL),
(71, 'edit-project-challan', 'Ereate Project Challan', 60, 1, 1, NULL, '2019-02-23 10:15:22', '2019-02-23 10:15:22', NULL),
(72, 'view-project-challan', 'View Project Challan', 62, 1, 1, NULL, '2019-02-23 10:15:58', '2019-02-23 10:15:58', NULL),
(73, 'delete-project-challan', 'Delete Project Challan', 64, 1, 1, NULL, '2019-02-23 10:16:33', '2019-02-23 10:16:33', NULL),
(74, 'view-suppliers', 'View Suppliers', 50, 1, 1, NULL, '2019-02-24 17:40:07', '2019-02-24 17:40:07', NULL),
(75, 'edit-suppliers', 'Edit Suppliers', 51, 1, 1, NULL, '2019-02-24 17:40:39', '2019-02-24 17:40:39', NULL),
(76, 'create-suppliers', 'Create Suppliers', 52, 1, 1, NULL, '2019-02-24 17:41:08', '2019-02-24 17:41:08', NULL),
(77, 'delete-suppliers', 'Delete Suppliers', 54, 1, 1, NULL, '2019-02-24 17:41:39', '2019-02-24 17:41:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`) VALUES
(34, 2, 3),
(35, 1, 2),
(36, 3, 2),
(37, 4, 2),
(38, 5, 2),
(39, 6, 2),
(40, 7, 2),
(41, 8, 2),
(42, 16, 2),
(43, 20, 2),
(44, 24, 2),
(45, 25, 2),
(46, 26, 2),
(47, 27, 2),
(48, 28, 2),
(49, 29, 2),
(50, 30, 2),
(51, 31, 2),
(52, 33, 2),
(53, 34, 2),
(54, 35, 2),
(55, 36, 2),
(56, 37, 2),
(57, 38, 2),
(58, 39, 2),
(59, 40, 2),
(60, 41, 2),
(61, 42, 2),
(62, 43, 2),
(63, 44, 2),
(64, 45, 2),
(65, 46, 2),
(66, 47, 2),
(67, 48, 2),
(68, 49, 2);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`id`, `permission_id`, `user_id`) VALUES
(1, 42, 2),
(2, 34, 2),
(3, 38, 2),
(4, 29, 2),
(5, 46, 2),
(6, 25, 2),
(7, 44, 2),
(8, 36, 2),
(9, 40, 2),
(10, 31, 2),
(11, 48, 2),
(12, 27, 2),
(13, 43, 2),
(14, 35, 2),
(15, 39, 2),
(16, 30, 2),
(17, 47, 2),
(18, 26, 2),
(19, 8, 2),
(20, 3, 2),
(21, 5, 2),
(22, 1, 2),
(23, 33, 2),
(24, 37, 2),
(25, 41, 2),
(26, 6, 2),
(27, 7, 2),
(28, 28, 2),
(29, 45, 2),
(30, 24, 2),
(31, 20, 2),
(32, 16, 2),
(33, 4, 2),
(34, 2, 3),
(38, 1, 4),
(39, 49, 4),
(40, 50, 4),
(41, 51, 4),
(42, 52, 4);

-- --------------------------------------------------------

--
-- Table structure for table `plant_and_equipment`
--

CREATE TABLE `plant_and_equipment` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `equipment_type` int(11) DEFAULT NULL,
  `date_form` datetime DEFAULT NULL,
  `date_to` datetime DEFAULT NULL,
  `name` varchar(700) DEFAULT NULL,
  `eel_code` varchar(300) DEFAULT NULL,
  `country_of_origin` varchar(400) DEFAULT NULL,
  `capacity` varchar(300) DEFAULT NULL,
  `make_by` varchar(300) DEFAULT NULL,
  `model` varchar(300) DEFAULT NULL,
  `year_of_manufac` int(11) DEFAULT NULL,
  `present_location` varchar(300) DEFAULT NULL,
  `remarks` text NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plant_and_equipment`
--

INSERT INTO `plant_and_equipment` (`id`, `project_id`, `equipment_type`, `date_form`, `date_to`, `name`, `eel_code`, `country_of_origin`, `capacity`, `make_by`, `model`, `year_of_manufac`, `present_location`, `remarks`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, '2019-02-01 00:00:00', '2019-02-09 00:00:00', 'CRAWLER CRANE', 'CC-001', 'CHINA', 'Bad', '380 TON, 84 M BOOM', 'ZCC3800', 2018, 'ON BOAT', 'Good', 1, NULL, '2019-01-22 21:01:36', '2019-02-10 09:39:11', NULL),
(3, 3, 2, '2019-02-01 00:00:00', '2019-02-28 00:00:00', 'CRAWLER CRANE', 'CC-001', 'CHINA', 'Better', '380 TON, 84 M BOOM', 'ZCC3800', 2018, 'ON BOAT', 'Good', 1, NULL, '2019-01-22 22:16:31', '2019-02-10 09:38:43', NULL),
(5, 1, 1, '2019-02-01 00:00:00', '2019-02-15 00:00:00', 'CRAWLER CRANE', 'CC-001', 'CHINA', 'Good', '380 TON, 84 M BOOM', 'ZCC3800', 2018, 'ON BOAT', 'Good', 1, NULL, '2019-01-22 22:26:54', '2019-02-10 09:38:53', NULL),
(6, 3, 1, NULL, NULL, 'Test - 1', 'TT06', 'Hongkong', '380 TON, 84 M BOOM', 'Teo', 'BBOO', 2018, 'Bangladesh', 'Excellent', 1, NULL, '2019-02-10 10:01:02', '2019-02-10 10:06:33', NULL),
(7, 1, 2, '2019-02-01 00:00:00', '2019-02-28 00:00:00', 'Test Eq', 'TW', 'CHINA', '380 TON, 84 M BOOM', 'test', '78M', 2018, 'Motijhil', 'Good', 1, NULL, '2019-02-11 18:38:57', '2019-02-11 18:38:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `code` varchar(200) DEFAULT NULL,
  `name` varchar(400) DEFAULT NULL,
  `unit_name` varchar(100) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `item_id`, `code`, `name`, `unit_name`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, 'product-01', 'product-01', 'kg', 1, NULL, '2019-02-24 19:00:51', '2019-02-24 19:39:28', NULL),
(3, 2, 'product-02', 'Product 02', 'kg', 1, NULL, '2019-02-24 20:54:41', '2019-02-24 20:54:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `code` varchar(200) DEFAULT NULL,
  `project_name` varchar(500) NOT NULL,
  `address` text,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `code`, `project_name`, `address`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'P-001', 'E-Engineering', '72, Mohakhali C/A, (8th Floor), Rupayan Center, Dhaka-1212, Bangladesh.\r\nTel. : (88-02) 9825705, 9891562, 9891597, 9856358-9,\r\n9857902, 9852454, 9854423,\r\nFax: (88-02) 9855949, \r\nWeb:www.saifpowertecltd.com', 1, NULL, '2019-02-10 03:09:28', '2019-04-08 23:46:55', NULL),
(3, 'P-002', 'Solar Power', '72, Mohakhali C/A, (8th Floor), Rupayan Center, Dhaka-1212, Bangladesh.\r\nTel. : (88-02) 9825705, 9891562, 9891597, 9856358-9,\r\n9857902, 9852454, 9854423,\r\nFax: (88-02) 9855949, \r\nWeb:www.saifpowertecltd.com', 1, NULL, '2019-02-10 04:05:36', '2019-04-08 23:48:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_type`
--

CREATE TABLE `project_type` (
  `id` int(11) NOT NULL,
  `name` varchar(600) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_type`
--

INSERT INTO `project_type` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Owned', 0, 0, '2019-02-10 10:18:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Rented', 0, 0, '2019-02-10 10:18:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `all` tinyint(1) NOT NULL DEFAULT '0',
  `sort` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `all`, `sort`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrator', 1, 1, 1, 1, NULL, '2019-01-14 19:17:02', '2019-01-14 19:17:02', NULL),
(2, 'Executive', 0, 2, 0, 1, 1, '2019-01-14 19:17:02', '2019-01-21 23:46:25', NULL),
(3, 'User', 0, 3, 1, 1, NULL, '2019-01-14 19:17:02', '2019-01-14 19:17:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(6, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` text COLLATE utf8mb4_unicode_ci,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `company_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` text COLLATE utf8mb4_unicode_ci,
  `from_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` text COLLATE utf8mb4_unicode_ci,
  `disclaimer` text COLLATE utf8mb4_unicode_ci,
  `google_analytics` text COLLATE utf8mb4_unicode_ci,
  `home_video1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_video2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_video3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_video4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `explanation1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `explanation2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `explanation3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `explanation4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `values` text COLLATE utf8mb4_unicode_ci,
  `data_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `logo`, `favicon`, `seo_title`, `seo_keyword`, `seo_description`, `company_contact`, `company_address`, `from_name`, `from_email`, `facebook`, `linkedin`, `twitter`, `google`, `copyright_text`, `footer_text`, `terms`, `disclaimer`, `google_analytics`, `home_video1`, `home_video2`, `home_video3`, `home_video4`, `explanation1`, `explanation2`, `explanation3`, `explanation4`, `values`, `data_type`, `post_type`, `created_at`, `updated_at`) VALUES
(1, NULL, '1547629427Saif--Power-tec-Logo-226x48.jpg', '1547632780Saif--Power-tec-Logo-favicon.jpg', 'Saif Inventory Management System', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-15 21:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `social_logins`
--

CREATE TABLE `social_logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `code` varchar(300) NOT NULL,
  `name` varchar(600) NOT NULL,
  `address` text,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `code`, `name`, `address`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'sup-01', 'Apex Production', 'Contact: 017166998877\r\nMohammadpur, Housing LTD\r\nRoad: 03; House: 01\r\nDhaka,1207', 1, 0, 2019, '2019-04-08 23:21:09', '0000-00-00 00:00:00'),
(2, 'tata-012', 'Tata', 'test', 1, 0, 2019, '2019-05-08 22:51:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `temp_product_receive_data`
--

CREATE TABLE `temp_product_receive_data` (
  `id` int(11) NOT NULL,
  `receive_no` varchar(500) NOT NULL,
  `receive_date` datetime NOT NULL,
  `product_id` int(11) NOT NULL,
  `part_no` varchar(500) NOT NULL,
  `supplier_id` varchar(250) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` float NOT NULL DEFAULT '0',
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_product_receive_data`
--

INSERT INTO `temp_product_receive_data` (`id`, `receive_no`, `receive_date`, `product_id`, `part_no`, `supplier_id`, `quantity`, `unit_price`, `project_id`) VALUES
(99, 'RCV-001', '2019-04-13 00:00:00', 5, '123456', '1', 50, 3, 1),
(100, 'RCV-001', '2019-04-13 00:00:00', 4, '123456', '1', 60, 6, 1),
(101, 'ISS-001', '2019-04-13 00:00:00', 5, '123456', '1', 5, 3, 3),
(102, 'ISS-001', '2019-04-13 00:00:00', 4, '123456', '1', 6, 6, 3),
(103, 'RCV-002', '2019-04-21 00:00:00', 4, '1235567', '1', 10, 99.7, 3),
(104, 'RCV-003', '2019-05-07 00:00:00', 6, '212134', '1', 12, 9000, 3),
(106, 'ISS-002', '2019-05-07 00:00:00', 6, '212134', '1', 5, 9000, 3),
(107, 'RCV-004', '2019-05-09 00:00:00', 7, '9090911', '2', 2, 100, 3),
(108, 'ISS-003', '2019-05-09 00:00:00', 7, '9090911', '2', 2, 100, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `confirmation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `is_term_accept` tinyint(1) NOT NULL DEFAULT '0' COMMENT ' 0 = not accepted,1 = accepted',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `status`, `confirmation_code`, `confirmed`, `is_term_accept`, `remember_token`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'Saif', 'admin@admin.com', '$2y$10$yzdRh.HNr8RukRLgiuVfoe37Ckjmr1wFdlQi0XHoTrCSLeBjLLYMS', 1, 'b1970adb3f301c8440c81e45b526060c', 1, 0, 'leVGiTe0KWeXBHFQ45jWu8j3OHIEiyM5ysUvC9uySRWgf1REmqgrQsSdaMov', 1, 1, '2019-01-14 19:17:02', '2019-01-21 15:36:38', NULL),
(2, 'Vipul', 'Basapati', 'executive@executive.com', '$2y$10$Xtds/X9sMuHoguyev.I6JO0g2b1c2eT4UiEuB3L6FUmmQlEI7h4gu', 1, '68c7a7b3a2968803ae6db884ae89f446', 1, 0, NULL, 1, NULL, '2019-01-14 19:17:02', '2019-01-14 19:17:02', NULL),
(3, 'User', 'Test', 'user@user.com', '$2y$10$hK926V1W.U2666U50rhQ7uj0TAMbB0cwa.kivaTzkVpSNVPQ7Re12', 1, 'fe3ae4e0b22211d756922a0bede508cf', 1, 0, NULL, 1, NULL, '2019-01-14 19:17:02', '2019-01-14 19:17:02', NULL),
(4, 'Rashed', 'Al Banna', 'r@gmail.com', '$2y$10$TKxuqIrAdSNAR5cvG0MtAeJrV34bRogqLC9bTmyyhsxZldb6THXtK', 1, 'b9a747f4ee9cab6be9906c6af5b4e04a', 1, 0, '4Kk9zXyngpH1yXycuQH5DFOF7BTipxs4xwacqtcnm35Pyz8t8lPgXuXGrzbm', 1, NULL, '2019-02-03 21:18:51', '2019-02-03 21:18:51', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_type_id_foreign` (`type_id`),
  ADD KEY `history_user_id_foreign` (`user_id`);

--
-- Indexes for table `history_types`
--
ALTER TABLE `history_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_ga_listunit`
--
ALTER TABLE `inv_ga_listunit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_issue`
--
ALTER TABLE `inv_issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_issuedetail`
--
ALTER TABLE `inv_issuedetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_item_unit`
--
ALTER TABLE `inv_item_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_material`
--
ALTER TABLE `inv_material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_materialbalance`
--
ALTER TABLE `inv_materialbalance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_materialcategory`
--
ALTER TABLE `inv_materialcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_materialcategorysub`
--
ALTER TABLE `inv_materialcategorysub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_receive`
--
ALTER TABLE `inv_receive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_receivedetail`
--
ALTER TABLE `inv_receivedetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_supplier`
--
ALTER TABLE `inv_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_supplierbalance`
--
ALTER TABLE `inv_supplierbalance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_warehosueinfo`
--
ALTER TABLE `inv_warehosueinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_page_slug_unique` (`page_slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `plant_and_equipment`
--
ALTER TABLE `plant_and_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_type`
--
ALTER TABLE `project_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_logins_user_id_foreign` (`user_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_product_receive_data`
--
ALTER TABLE `temp_product_receive_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `history_types`
--
ALTER TABLE `history_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `inv_ga_listunit`
--
ALTER TABLE `inv_ga_listunit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inv_issue`
--
ALTER TABLE `inv_issue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `inv_issuedetail`
--
ALTER TABLE `inv_issuedetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `inv_item_unit`
--
ALTER TABLE `inv_item_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `inv_material`
--
ALTER TABLE `inv_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `inv_materialbalance`
--
ALTER TABLE `inv_materialbalance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `inv_materialcategory`
--
ALTER TABLE `inv_materialcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `inv_materialcategorysub`
--
ALTER TABLE `inv_materialcategorysub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inv_receive`
--
ALTER TABLE `inv_receive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `inv_receivedetail`
--
ALTER TABLE `inv_receivedetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `inv_supplier`
--
ALTER TABLE `inv_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inv_supplierbalance`
--
ALTER TABLE `inv_supplierbalance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inv_warehosueinfo`
--
ALTER TABLE `inv_warehosueinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `plant_and_equipment`
--
ALTER TABLE `plant_and_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `project_type`
--
ALTER TABLE `project_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `social_logins`
--
ALTER TABLE `social_logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `temp_product_receive_data`
--
ALTER TABLE `temp_product_receive_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `history_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD CONSTRAINT `social_logins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;
