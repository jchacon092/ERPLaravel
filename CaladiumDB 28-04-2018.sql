
CREATE TABLE `MARCA` (
    `id_marca` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre_marca` VARCHAR(150) NOT NULL,
    `estado_marca` TINYINT NOT NULL,
    CONSTRAINT `PK_MARCA` PRIMARY KEY (`id_marca`)
);

# ---------------------------------------------------------------------- #
# Add table "EMPRESA"                                                    #
# ---------------------------------------------------------------------- #

CREATE TABLE `EMPRESA` (
    `id_empresa` INTEGER NOT NULL AUTO_INCREMENT,
    `id_asignacion` INTEGER NOT NULL,
    `nombre_empresa` VARCHAR(150) NOT NULL,
    `telefono_empresa` VARCHAR(16) NOT NULL,
    `ciudad_empresa` VARCHAR(150) NOT NULL,
    `direccion_empresa` VARCHAR(150) NOT NULL,
    `central_empresa` TINYINT(1) NOT NULL,
    `estado_empresa` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_EMPRESA` PRIMARY KEY (`id_empresa`)
);

# ---------------------------------------------------------------------- #
# Add table "ASIGNACION"                                                 #
# ---------------------------------------------------------------------- #

CREATE TABLE `ASIGNACION` (
    `id_asignacion` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre_cadena` VARCHAR(150) NOT NULL,
    `propietario_asignacion` VARCHAR(150) NOT NULL,
    `telefono_asignacion` VARCHAR(16) NOT NULL,
    `email_asignacion` VARCHAR(50) NOT NULL,
    `estado_asignacion` TINYINT NOT NULL,
    CONSTRAINT `PK_ASIGNACION` PRIMARY KEY (`id_asignacion`)
);

# ---------------------------------------------------------------------- #
# Add table "CAJA"                                                       #
# ---------------------------------------------------------------------- #

CREATE TABLE `CAJA` (
    `id_caja` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre_caja` VARCHAR(80) NOT NULL,
    `numero_caja` INTEGER NOT NULL,
    `descripcion_caja` TEXT NOT NULL,
    `estado_caja` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_CAJA` PRIMARY KEY (`id_caja`)
);

# ---------------------------------------------------------------------- #
# Add table "CATEGORIA"                                                  #
# ---------------------------------------------------------------------- #

CREATE TABLE `CATEGORIA` (
    `id_categoria` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre_categoria` VARCHAR(150) NOT NULL,
    `estado_categoria` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_CATEGORIA` PRIMARY KEY (`id_categoria`)
);

# ---------------------------------------------------------------------- #
# Add table "PRESENTACION"                                               #
# ---------------------------------------------------------------------- #

CREATE TABLE `PRESENTACION` (
    `id_presentacion` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre_presentacion` VARCHAR(150) NOT NULL,
    `estado_presentacion` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_PRESENTACION` PRIMARY KEY (`id_presentacion`)
);

# ---------------------------------------------------------------------- #
# Add table "PRESENTACION_PRODUCTO"                                      #
# ---------------------------------------------------------------------- #

CREATE TABLE `PRESENTACION_PRODUCTO` (
    `id_presentacion_producto` INTEGER NOT NULL AUTO_INCREMENT,
    `id_presentacion` INTEGER NOT NULL,
    `id_producto` INTEGER NOT NULL,
    `id_precios_productos` INTEGER NOT NULL,
    `estado_presentacion_producto` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_PRESENTACION_PRODUCTO` PRIMARY KEY (`id_presentacion_producto`)
);

# ---------------------------------------------------------------------- #
# Add table "PRODUCTO"                                                   #
# ---------------------------------------------------------------------- #

CREATE TABLE `PRODUCTO` (
    `id_producto` INTEGER NOT NULL AUTO_INCREMENT,
    `id_categoria` INTEGER NOT NULL,
    `id_marca` INTEGER NOT NULL,
    `nombre_producto` VARCHAR(150) NOT NULL,
    `foto_producto` VARCHAR(256) NOT NULL,
    `descripcion_producto` TEXT,
    `codigo_barra_producto` VARCHAR(256),
    `estado_producto` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_PRODUCTO` PRIMARY KEY (`id_producto`)
);

# ---------------------------------------------------------------------- #
# Add table "DETALLE_TRASLADO"                                           #
# ---------------------------------------------------------------------- #

CREATE TABLE `DETALLE_TRASLADO` (
    `id_detalle_traslado` INTEGER NOT NULL AUTO_INCREMENT,
    `cantidad_traslado` DECIMAL(15,2) NOT NULL,
    `id_traslado` INTEGER NOT NULL,
    `id_producto_detalle` INTEGER NOT NULL,
    `estado_detalle` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_DETALLE_TRASLADO` PRIMARY KEY (`id_detalle_traslado`)
);

# ---------------------------------------------------------------------- #
# Add table "TRASLADO"                                                   #
# ---------------------------------------------------------------------- #

CREATE TABLE `TRASLADO` (
    `id_traslado` INTEGER NOT NULL AUTO_INCREMENT,
    `id_empleado_realiza` INTEGER NOT NULL,
    `id_empresa_realiza` INTEGER NOT NULL,
    `fecha_traslado` DATETIME NOT NULL,
    `motivo_traslado` VARCHAR(150) NOT NULL,
    `empleado_recibe` VARCHAR(150) NOT NULL,
    `surcursal_recibe` INTEGER NOT NULL,
    `estado_traslado` TINYINT(1) NOT NULL,
    PRIMARY KEY (`id_traslado`)
);

# ---------------------------------------------------------------------- #
# Add table "DETALLE_COMPRA"                                             #
# ---------------------------------------------------------------------- #

CREATE TABLE `DETALLE_COMPRA` (
    `id_detalle_compra` INTEGER NOT NULL AUTO_INCREMENT,
    `id_encabezado_compra` INTEGER NOT NULL,
    `nombre_compra` VARCHAR(150) NOT NULL,
    `cantidad_compra` DECIMAL(15,2) NOT NULL,
    `precio_compra` DECIMAL(15,2) NOT NULL,
    `fecha_vencimiento_compra` DATE NOT NULL,
    `estado_compra` TINYINT(1) NOT NULL,
    PRIMARY KEY (`id_detalle_compra`)
);

# ---------------------------------------------------------------------- #
# Add table "DETALLE_PRODUCTO"                                           #
# ---------------------------------------------------------------------- #

CREATE TABLE `DETALLE_PRODUCTO` (
    `id_producto_detalle` INTEGER NOT NULL AUTO_INCREMENT,
    `id_presentacion_producto` INTEGER NOT NULL,
    `existencia_maxima` INTEGER NOT NULL,
    `existencia_minima` INTEGER NOT NULL,
    `existencia` INTEGER NOT NULL,
    `fecha_vencimiento` DATE NOT NULL,
    `estado_detalle` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_DETALLE_PRODUCTO` PRIMARY KEY (`id_producto_detalle`)
);

# ---------------------------------------------------------------------- #
# Add table "PROVEEDOR"                                                  #
# ---------------------------------------------------------------------- #

CREATE TABLE `PROVEEDOR` (
    `id_proveedor` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre_proveedor` VARCHAR(150) NOT NULL,
    `direccion_proveedor` VARCHAR(150) NOT NULL,
    `telefono_proveedor` VARCHAR(16) NOT NULL,
    `email_proveedor` VARCHAR(25) NOT NULL,
    `estado_proveedor` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_PROVEEDOR` PRIMARY KEY (`id_proveedor`)
);

# ---------------------------------------------------------------------- #
# Add table "COMPRA_ENCABEZADO"                                          #
# ---------------------------------------------------------------------- #

CREATE TABLE `COMPRA_ENCABEZADO` (
    `id_encabezado_compra` INTEGER NOT NULL AUTO_INCREMENT,
    `id_proveedor` INTEGER NOT NULL,
    `id_empleado_compra` INTEGER NOT NULL,
    `documento_compra` VARCHAR(150),
    `empleado_recibe` VARCHAR(80) NOT NULL,
    `fecha_compra` DATE NOT NULL,
    `total_encabezado` DECIMAL(15,2) NOT NULL,
    `tipo_pago` TINYINT(1) NOT NULL,
    `contado_encabezado` TINYINT(1) NOT NULL,
    `estado_encabezado` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_COMPRA_ENCABEZADO` PRIMARY KEY (`id_encabezado_compra`)
);

# ---------------------------------------------------------------------- #
# Add table "EMPLEADO"                                                   #
# ---------------------------------------------------------------------- #

CREATE TABLE `EMPLEADO` (
    `id_empleado` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre_empleado` VARCHAR(150) NOT NULL,
    `apellido_empleado` VARCHAR(150) NOT NULL,
    `direccion_empleado` VARCHAR(150) NOT NULL,
    `telefono_empleado` VARCHAR(16),
    `celular_empleado` VARCHAR(16) NOT NULL,
    `email_empleado` VARCHAR(25),
    `edad` INTEGER NOT NULL,
    `DPI` VARCHAR(40),
    `fecha_contrato` DATE NOT NULL,
    `estado_empleado` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_EMPLEADO` PRIMARY KEY (`id_empleado`)
);

# ---------------------------------------------------------------------- #
# Add table "USUARIO"                                                    #
# ---------------------------------------------------------------------- #

CREATE TABLE `USUARIO` (
    `id_usuario` VARCHAR(40) NOT NULL,
    `id_empleado` INTEGER NOT NULL,
    `pass_usuario` VARCHAR(150) NOT NULL,
    `estado_usuario` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_USUARIO` PRIMARY KEY (`id_usuario`)
);

# ---------------------------------------------------------------------- #
# Add table "NOTA"                                                       #
# ---------------------------------------------------------------------- #

CREATE TABLE `NOTA` (
    `id_nota` INTEGER NOT NULL AUTO_INCREMENT,
    `id_producto_detalle` INTEGER NOT NULL,
    `id_empleado` INTEGER NOT NULL,
    `nombre_nota` VARCHAR(150) NOT NULL,
    `motivo_nota` VARCHAR(150) NOT NULL,
    `fecha` DATE NOT NULL,
    `nota` TEXT NOT NULL,
    `estado_nota` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_NOTA` PRIMARY KEY (`id_nota`)
);

# ---------------------------------------------------------------------- #
# Add table "ENCABEZADO_VENTA"                                           #
# ---------------------------------------------------------------------- #

CREATE TABLE `ENCABEZADO_VENTA` (
    `id_encabezado_venta` INTEGER NOT NULL AUTO_INCREMENT,
    `id_empleado` INTEGER NOT NULL,
    `id_cliente` INTEGER,
    `id_caja` INTEGER,
    `fecha_encabezado_venta` DATETIME NOT NULL,
    `numero_recibo` INTEGER,
    `numero_cotizacion` INTEGER,
    `empresa_venta` VARCHAR(150) NOT NULL,
    `telefono_venta` VARCHAR(16) NOT NULL,
    `subtotal_venta` DECIMAL(15,2) NOT NULL,
    `descuento_venta` DECIMAL(15,2),
    `total_venta` DECIMAL(15,2) NOT NULL,
    `cambio_venta` DECIMAL(15,2),
    `pago_venta` DECIMAL(15,2) NOT NULL,
    `cotizacion` TINYINT(1) NOT NULL,
    `estado_encabezado` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_ENCABEZADO_VENTA` PRIMARY KEY (`id_encabezado_venta`)
);

# ---------------------------------------------------------------------- #
# Add table "DETALLE_VENTA"                                              #
# ---------------------------------------------------------------------- #

CREATE TABLE `DETALLE_VENTA` (
    `id_detalle` INTEGER NOT NULL AUTO_INCREMENT,
    `id_encabezado_venta` INTEGER NOT NULL,
    `id_producto_detalle` INTEGER NOT NULL,
    `cantidad_detalle` INTEGER NOT NULL,
    `estado_detalle` TINYINT(1) NOT NULL,
    PRIMARY KEY (`id_detalle`)
);

# ---------------------------------------------------------------------- #
# Add table "CUENTA_POR_PAGAR"                                           #
# ---------------------------------------------------------------------- #

CREATE TABLE `CUENTA_POR_PAGAR` (
    `id_cuenta_por_pagar` INTEGER NOT NULL AUTO_INCREMENT,
    `id_encabezado_compra` INTEGER NOT NULL,
    `fecha_pago` DATE NOT NULL,
    `saldo_inicial` DECIMAL(15,2) NOT NULL,
    `saldo_actual` DECIMAL(15,2) NOT NULL,
    `saldo_abonado` DECIMAL(15,2),
    `saldo_mora` DECIMAL(15,2),
    `contacto_saldo` TEXT NOT NULL,
    `estado_saldo` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_CUENTA_POR_PAGAR` PRIMARY KEY (`id_cuenta_por_pagar`)
);

# ---------------------------------------------------------------------- #
# Add table "SALDO_POR_PAGAR"                                            #
# ---------------------------------------------------------------------- #

CREATE TABLE `SALDO_POR_PAGAR` (
    `id_saldo` INTEGER NOT NULL AUTO_INCREMENT,
    `abono_pagar` DECIMAL(15,2) NOT NULL,
    `fecha_abono` DATE NOT NULL,
    `estado_abono_pagar` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_SALDO_POR_PAGAR` PRIMARY KEY (`id_saldo`)
);

# ---------------------------------------------------------------------- #
# Add table "CUENTA_POR_COBRAR"                                          #
# ---------------------------------------------------------------------- #

CREATE TABLE `CUENTA_POR_COBRAR` (
    `id_cuenta_cobrar` INTEGER NOT NULL AUTO_INCREMENT,
    `id_encabezado_venta` INTEGER NOT NULL,
    `id_cliente` INTEGER NOT NULL,
    `fecha_maxima_cobro` DATE NOT NULL,
    `deuda_inicial` DECIMAL(15,2) NOT NULL,
    `deuda_actual` DECIMAL(15,2) NOT NULL,
    `deuda_abonado` DECIMAL(15,2),
    `deuda_mora` DECIMAL(15,2) NOT NULL,
    `contacto_deuda` TEXT NOT NULL,
    `estado_deuda` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_CUENTA_POR_COBRAR` PRIMARY KEY (`id_cuenta_cobrar`)
);

# ---------------------------------------------------------------------- #
# Add table "SALDO_POR_COBRAR"                                           #
# ---------------------------------------------------------------------- #

CREATE TABLE `SALDO_POR_COBRAR` (
    `id_saldo` INTEGER NOT NULL AUTO_INCREMENT,
    `id_empleado` INTEGER NOT NULL,
    `abono_cobrar` DECIMAL(15,2) NOT NULL,
    `fecha_abono` DATETIME NOT NULL,
    `estado_abono_cobrar` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_SALDO_POR_COBRAR` PRIMARY KEY (`id_saldo`)
);

# ---------------------------------------------------------------------- #
# Add table "CLIENTE"                                                    #
# ---------------------------------------------------------------------- #

CREATE TABLE `CLIENTE` (
    `id_cliente` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre_cliente` VARCHAR(150) NOT NULL,
    `apellidos_cliente` VARCHAR(150) NOT NULL,
    `direccion_cliente` VARCHAR(150),
    `telefono_cliente` VARCHAR(16),
    `celular_cliente` VARCHAR(16),
    `email_cliente` VARCHAR(50),
    `NIT` VARCHAR(25) NOT NULL,
    `estado_cliente` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_CLIENTE` PRIMARY KEY (`id_cliente`)
);

# ---------------------------------------------------------------------- #
# Add table "PRECIOSPRODUCTOS"                                           #
# ---------------------------------------------------------------------- #

CREATE TABLE `PRECIOSPRODUCTOS` (
    `id_precios_productos` INTEGER NOT NULL AUTO_INCREMENT,
    `precio_presentacion_compra` DECIMAL(15,2) NOT NULL,
    `precio_presentacion_venta` DECIMAL(15,2) NOT NULL,
    `fecha_precio` DATE NOT NULL,
    `estado_precio` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_PRECIOSPRODUCTOS` PRIMARY KEY (`id_precios_productos`)
);

# ---------------------------------------------------------------------- #
# Add table "TIPO_PAGO"                                                  #
# ---------------------------------------------------------------------- #

CREATE TABLE `TIPO_PAGO` (
    `id_pago` INTEGER NOT NULL,
    `tipo_pago` VARCHAR(150) NOT NULL,
    `estado_pago` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_TIPO_PAGO` PRIMARY KEY (`id_pago`)
);

# ---------------------------------------------------------------------- #
# Add table "PAGO_MIXTO"                                                 #
# ---------------------------------------------------------------------- #

CREATE TABLE `PAGO_MIXTO` (
    `id_pago_mixto` INTEGER NOT NULL AUTO_INCREMENT,
    `id_encabezado_venta` INTEGER NOT NULL,
    `id_pago` INTEGER NOT NULL,
    CONSTRAINT `PK_PAGO_MIXTO` PRIMARY KEY (`id_pago_mixto`)
);

# ---------------------------------------------------------------------- #
# Add table "COBROS"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `COBROS` (
    `id_cobros` INTEGER NOT NULL AUTO_INCREMENT,
    `id_cuenta_cobrar` INTEGER NOT NULL,
    `id_saldo` INTEGER NOT NULL,
    CONSTRAINT `PK_COBROS` PRIMARY KEY (`id_cobros`)
);

# ---------------------------------------------------------------------- #
# Add table "PAGOS"                                                      #
# ---------------------------------------------------------------------- #

CREATE TABLE `PAGOS` (
    `id_pagos` INTEGER NOT NULL AUTO_INCREMENT,
    `id_cuenta_por_pagar` INTEGER NOT NULL,
    `id_saldo` INTEGER NOT NULL,
    CONSTRAINT `PK_PAGOS` PRIMARY KEY (`id_pagos`)
);

# ---------------------------------------------------------------------- #
# Add table "DEVOLUCIONESCOMPRA"                                         #
# ---------------------------------------------------------------------- #

CREATE TABLE `DEVOLUCIONESCOMPRA` (
    `id_devoluciones_compra` INTEGER NOT NULL AUTO_INCREMENT,
    `id_producto_detalle` INTEGER NOT NULL,
    `id_empleado` INTEGER NOT NULL,
    `id_proveedor` INTEGER NOT NULL,
    `motivo_devolucion_compra` TEXT NOT NULL,
    `cantidad_devolucion_compra` INTEGER NOT NULL,
    `fecha_devolucion_compra` DATE NOT NULL,
    `estado_devolucion_compra` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_DEVOLUCIONESCOMPRA` PRIMARY KEY (`id_devoluciones_compra`)
);

# ---------------------------------------------------------------------- #
# Add table "DEVOLUCIONESVENTA"                                          #
# ---------------------------------------------------------------------- #

CREATE TABLE `DEVOLUCIONESVENTA` (
    `id_devoluciones_venta` INTEGER NOT NULL AUTO_INCREMENT,
    `id_producto_detalle` INTEGER NOT NULL,
    `id_empleado` INTEGER NOT NULL,
    `id_cliente` INTEGER NOT NULL,
    `motivo_devolucion_venta` TEXT NOT NULL,
    `cantidad_devolucion_venta` INTEGER NOT NULL,
    `fecha_devolucion_venta` DATE NOT NULL,
    `estaado_devolucion_venta` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_DEVOLUCIONESVENTA` PRIMARY KEY (`id_devoluciones_venta`)
);

# ---------------------------------------------------------------------- #
# Add table "CIERRECAJA"                                                 #
# ---------------------------------------------------------------------- #

CREATE TABLE `CIERRECAJA` (
    `id_cierre` INTEGER NOT NULL AUTO_INCREMENT,
    `id_caja` INTEGER NOT NULL,
    `id_empleado` INTEGER NOT NULL,
    `cierre_anterior` DECIMAL(15,2),
    `monto_actual` DECIMAL(15,2) NOT NULL,
    `monto_retirado` DECIMAL(15,2),
    `monto_sobrante` DECIMAL(15,2),
    `fecha_cierre` DATETIME NOT NULL,
    `observaciones_cierre` TEXT,
    `estado_cierre` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_CIERRECAJA` PRIMARY KEY (`id_cierre`)
);

# ---------------------------------------------------------------------- #
# Add table "TRASLADODINERO"                                             #
# ---------------------------------------------------------------------- #

CREATE TABLE `TRASLADODINERO` (
    `id_traslado_dinero` INTEGER NOT NULL AUTO_INCREMENT,
    `id_caja_traslada` INTEGER NOT NULL,
    `id_caja_recibe` INTEGER NOT NULL,
    `motivo_traslado` TEXT NOT NULL,
    `cantidad_traslado` DECIMAL(15,2) NOT NULL,
    `empleado_traslado` INTEGER NOT NULL,
    `empleado_recibe` INTEGER NOT NULL,
    `estado_traslado_dinero` TINYINT(1) NOT NULL,
    CONSTRAINT `PK_TRASLADODINERO` PRIMARY KEY (`id_traslado_dinero`)
);

# ---------------------------------------------------------------------- #
# Add table "EMPRESA_EMPLEADO"                                           #
# ---------------------------------------------------------------------- #

CREATE TABLE `EMPRESA_EMPLEADO` (
    `id_empleado_empresa` INTEGER NOT NULL AUTO_INCREMENT,
    `id_empresa` INTEGER NOT NULL,
    `id_empleado` INTEGER NOT NULL,
    CONSTRAINT `PK_EMPRESA_EMPLEADO` PRIMARY KEY (`id_empleado_empresa`)
);

# ---------------------------------------------------------------------- #
# Foreign key constraints                                                #
# ---------------------------------------------------------------------- #

ALTER TABLE `EMPRESA` ADD CONSTRAINT `ASIGNACION_EMPRESA` 
    FOREIGN KEY (`id_asignacion`) REFERENCES `ASIGNACION` (`id_asignacion`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `PRESENTACION_PRODUCTO` ADD CONSTRAINT `PRESENTACION_PRESENTACION_PRODUCTO` 
    FOREIGN KEY (`id_presentacion`) REFERENCES `PRESENTACION` (`id_presentacion`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `PRESENTACION_PRODUCTO` ADD CONSTRAINT `PRODUCTO_PRESENTACION_PRODUCTO` 
    FOREIGN KEY (`id_producto`) REFERENCES `PRODUCTO` (`id_producto`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `PRESENTACION_PRODUCTO` ADD CONSTRAINT `PRECIOSPRODUCTOS_PRESENTACION_PRODUCTO` 
    FOREIGN KEY (`id_precios_productos`) REFERENCES `PRECIOSPRODUCTOS` (`id_precios_productos`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `PRODUCTO` ADD CONSTRAINT `CATEGORIA_PRODUCTO` 
    FOREIGN KEY (`id_categoria`) REFERENCES `CATEGORIA` (`id_categoria`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `PRODUCTO` ADD CONSTRAINT `MARCA_PRODUCTO` 
    FOREIGN KEY (`id_marca`) REFERENCES `MARCA` (`id_marca`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `DETALLE_TRASLADO` ADD CONSTRAINT `TRASLADO_DETALLE_TRASLADO` 
    FOREIGN KEY (`id_traslado`) REFERENCES `TRASLADO` (`id_traslado`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `DETALLE_TRASLADO` ADD CONSTRAINT `DETALLE_PRODUCTO_DETALLE_TRASLADO` 
    FOREIGN KEY (`id_producto_detalle`) REFERENCES `DETALLE_PRODUCTO` (`id_producto_detalle`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `TRASLADO` ADD CONSTRAINT `EMPLEADO_TRASLADO` 
    FOREIGN KEY (`id_empleado_realiza`) REFERENCES `EMPLEADO` (`id_empleado`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `TRASLADO` ADD CONSTRAINT `EMPRESA_TRASLADO` 
    FOREIGN KEY (`id_empresa_realiza`) REFERENCES `EMPRESA` (`id_empresa`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `DETALLE_COMPRA` ADD CONSTRAINT `COMPRA_ENCABEZADO_DETALLE_COMPRA` 
    FOREIGN KEY (`id_encabezado_compra`) REFERENCES `COMPRA_ENCABEZADO` (`id_encabezado_compra`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `DETALLE_PRODUCTO` ADD CONSTRAINT `PRESENTACION_PRODUCTO_DETALLE_PRODUCTO` 
    FOREIGN KEY (`id_presentacion_producto`) REFERENCES `PRESENTACION_PRODUCTO` (`id_presentacion_producto`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `COMPRA_ENCABEZADO` ADD CONSTRAINT `PROVEEDOR_COMPRA_ENCABEZADO` 
    FOREIGN KEY (`id_proveedor`) REFERENCES `PROVEEDOR` (`id_proveedor`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `COMPRA_ENCABEZADO` ADD CONSTRAINT `EMPLEADO_COMPRA_ENCABEZADO` 
    FOREIGN KEY (`id_empleado_compra`) REFERENCES `EMPLEADO` (`id_empleado`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `USUARIO` ADD CONSTRAINT `EMPLEADO_USUARIO` 
    FOREIGN KEY (`id_empleado`) REFERENCES `EMPLEADO` (`id_empleado`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `NOTA` ADD CONSTRAINT `DETALLE_PRODUCTO_NOTA` 
    FOREIGN KEY (`id_producto_detalle`) REFERENCES `DETALLE_PRODUCTO` (`id_producto_detalle`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `NOTA` ADD CONSTRAINT `EMPLEADO_NOTA` 
    FOREIGN KEY (`id_empleado`) REFERENCES `EMPLEADO` (`id_empleado`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `ENCABEZADO_VENTA` ADD CONSTRAINT `EMPLEADO_ENCABEZADO_VENTA` 
    FOREIGN KEY (`id_empleado`) REFERENCES `EMPLEADO` (`id_empleado`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `ENCABEZADO_VENTA` ADD CONSTRAINT `CLIENTE_ENCABEZADO_VENTA` 
    FOREIGN KEY (`id_cliente`) REFERENCES `CLIENTE` (`id_cliente`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `ENCABEZADO_VENTA` ADD CONSTRAINT `CAJA_ENCABEZADO_VENTA` 
    FOREIGN KEY (`id_caja`) REFERENCES `CAJA` (`id_caja`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `DETALLE_VENTA` ADD CONSTRAINT `ENCABEZADO_VENTA_DETALLE_VENTA` 
    FOREIGN KEY (`id_encabezado_venta`) REFERENCES `ENCABEZADO_VENTA` (`id_encabezado_venta`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `DETALLE_VENTA` ADD CONSTRAINT `DETALLE_PRODUCTO_DETALLE_VENTA` 
    FOREIGN KEY (`id_producto_detalle`) REFERENCES `DETALLE_PRODUCTO` (`id_producto_detalle`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `CUENTA_POR_PAGAR` ADD CONSTRAINT `COMPRA_ENCABEZADO_CUENTA_POR_PAGAR` 
    FOREIGN KEY (`id_encabezado_compra`) REFERENCES `COMPRA_ENCABEZADO` (`id_encabezado_compra`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `CUENTA_POR_COBRAR` ADD CONSTRAINT `ENCABEZADO_VENTA_CUENTA_POR_COBRAR` 
    FOREIGN KEY (`id_encabezado_venta`) REFERENCES `ENCABEZADO_VENTA` (`id_encabezado_venta`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `CUENTA_POR_COBRAR` ADD CONSTRAINT `CLIENTE_CUENTA_POR_COBRAR` 
    FOREIGN KEY (`id_cliente`) REFERENCES `CLIENTE` (`id_cliente`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `SALDO_POR_COBRAR` ADD CONSTRAINT `EMPLEADO_SALDO_POR_COBRAR` 
    FOREIGN KEY (`id_empleado`) REFERENCES `EMPLEADO` (`id_empleado`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `PAGO_MIXTO` ADD CONSTRAINT `ENCABEZADO_VENTA_PAGO_MIXTO` 
    FOREIGN KEY (`id_encabezado_venta`) REFERENCES `ENCABEZADO_VENTA` (`id_encabezado_venta`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `PAGO_MIXTO` ADD CONSTRAINT `TIPO_PAGO_PAGO_MIXTO` 
    FOREIGN KEY (`id_pago`) REFERENCES `TIPO_PAGO` (`id_pago`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `COBROS` ADD CONSTRAINT `CUENTA_POR_COBRAR_COBROS` 
    FOREIGN KEY (`id_cuenta_cobrar`) REFERENCES `CUENTA_POR_COBRAR` (`id_cuenta_cobrar`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `COBROS` ADD CONSTRAINT `SALDO_POR_COBRAR_COBROS` 
    FOREIGN KEY (`id_saldo`) REFERENCES `SALDO_POR_COBRAR` (`id_saldo`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `PAGOS` ADD CONSTRAINT `CUENTA_POR_PAGAR_PAGOS` 
    FOREIGN KEY (`id_cuenta_por_pagar`) REFERENCES `CUENTA_POR_PAGAR` (`id_cuenta_por_pagar`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `PAGOS` ADD CONSTRAINT `SALDO_POR_PAGAR_PAGOS` 
    FOREIGN KEY (`id_saldo`) REFERENCES `SALDO_POR_PAGAR` (`id_saldo`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `DEVOLUCIONESCOMPRA` ADD CONSTRAINT `DETALLE_PRODUCTO_DEVOLUCIONESCOMPRA` 
    FOREIGN KEY (`id_producto_detalle`) REFERENCES `DETALLE_PRODUCTO` (`id_producto_detalle`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `DEVOLUCIONESCOMPRA` ADD CONSTRAINT `EMPLEADO_DEVOLUCIONESCOMPRA` 
    FOREIGN KEY (`id_empleado`) REFERENCES `EMPLEADO` (`id_empleado`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `DEVOLUCIONESCOMPRA` ADD CONSTRAINT `PROVEEDOR_DEVOLUCIONESCOMPRA` 
    FOREIGN KEY (`id_proveedor`) REFERENCES `PROVEEDOR` (`id_proveedor`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `DEVOLUCIONESVENTA` ADD CONSTRAINT `DETALLE_PRODUCTO_DEVOLUCIONESVENTA` 
    FOREIGN KEY (`id_producto_detalle`) REFERENCES `DETALLE_PRODUCTO` (`id_producto_detalle`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `DEVOLUCIONESVENTA` ADD CONSTRAINT `EMPLEADO_DEVOLUCIONESVENTA` 
    FOREIGN KEY (`id_empleado`) REFERENCES `EMPLEADO` (`id_empleado`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `DEVOLUCIONESVENTA` ADD CONSTRAINT `CLIENTE_DEVOLUCIONESVENTA` 
    FOREIGN KEY (`id_cliente`) REFERENCES `CLIENTE` (`id_cliente`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `CIERRECAJA` ADD CONSTRAINT `CAJA_CIERRECAJA` 
    FOREIGN KEY (`id_caja`) REFERENCES `CAJA` (`id_caja`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `CIERRECAJA` ADD CONSTRAINT `EMPLEADO_CIERRECAJA` 
    FOREIGN KEY (`id_empleado`) REFERENCES `EMPLEADO` (`id_empleado`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `TRASLADODINERO` ADD CONSTRAINT `CIERRECAJA_TRASLADODINERO` 
    FOREIGN KEY (`id_caja_traslada`) REFERENCES `CIERRECAJA` (`id_cierre`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `TRASLADODINERO` ADD CONSTRAINT `CAJA_TRASLADODINERO` 
    FOREIGN KEY (`id_caja_recibe`) REFERENCES `CAJA` (`id_caja`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `EMPRESA_EMPLEADO` ADD CONSTRAINT `EMPRESA_EMPRESA_EMPLEADO` 
    FOREIGN KEY (`id_empresa`) REFERENCES `EMPRESA` (`id_empresa`);

ALTER TABLE `EMPRESA_EMPLEADO` ADD CONSTRAINT `EMPLEADO_EMPRESA_EMPLEADO` 
    FOREIGN KEY (`id_empleado`) REFERENCES `EMPLEADO` (`id_empleado`);
