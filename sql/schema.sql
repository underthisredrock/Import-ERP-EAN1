--
-- Database: `import_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalogo`
--

CREATE TABLE `catalogo` (
    `id` int(11) NOT NULL,
    `productId` varchar(255),
    `name` varchar(255),
    `pathView` TEXT(1024),  
    `type` varchar(255),
    `brand` varchar(255),
    `brandId` varchar(255),
    `collection` varchar(255),
    `url` TEXT(1024),  
    `annotation` varchar(255),
    `subname` varchar(255),
    `code` varchar(255),
    `categoryPath` varchar(255),
    `kind` varchar(255),
    `category` varchar(255),    
    `subCategory` varchar(255),
    `marketType` varchar(255),
    `manufacturer` varchar(255),
    `description` TEXT(1024),
    `unit` varchar(255),
    `unitAmount` varchar(255),
    `orderUnit` varchar(255),
    `variants` varchar(255), -- caricare json array
    `variantDisplayType` varchar(255),
    `prod_size` varchar(255),
    `prod_price` varchar(255),
    `prod_list_price` varchar(255),
    `prod_img1_src` TEXT(1024),
    `price` decimal,
    `list_price` decimal
);

-- Indexes for dumped tables
--

--
-- Indexes for table `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;