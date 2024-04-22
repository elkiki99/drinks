import { formatearDinero } from '../helpers'
import useDrinks from '../hooks/useDrinks';

export default function Producto({producto, botonAgregar = false, botonDisponible = false}) {

    const { handleClickModal, handleSetProducto, handleClickProductoAgotado } = useDrinks()
    const { nombre, precio, imagen } = producto;

    return (
      <>
        <div className="p-2 flex flex-col min-h-56">
          {/* Contenedor del texto */}
          <div className="flex flex-col justify-between h-full">
            <img
              alt={`imagen ${nombre}`}
              className="w-full"
              src={`/img/${imagen}.webp`}
            />
            <h3 className="text-lg font-medium mt-2">{nombre}</h3>
            <div className="flex-grow"></div>
            <p className="font-semibold text-4xl text-green-600 my-3">{formatearDinero(precio)}</p>
          </div>

          {botonAgregar && (
          <button 
            onClick={() => {
              handleClickModal()
              handleSetProducto(producto)
            }}
            className='bg-green-600 hover:bg-green-800 text-white font-medium w-full mt-auto p-1.5 rounded-md'>
              Agregar
            </button>
          )}

          {botonDisponible && (
            <button 
            onClick={() => handleClickProductoAgotado(producto.id) }
            className='bg-green-600 hover:bg-green-800 text-white font-medium w-full mt-auto p-1.5 rounded-md'>
              Producto agotado
            </button>
          )}
        </div>
      </>
    )
}