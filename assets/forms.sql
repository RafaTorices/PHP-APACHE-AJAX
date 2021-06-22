--
-- Base de datos: `forms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forms`
--

CREATE TABLE `forms` (
  `id` int NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `campo1` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `campo2` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `campo3` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `campo4` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `campo5` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
