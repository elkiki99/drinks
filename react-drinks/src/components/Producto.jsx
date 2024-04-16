import { formatearDinero } from '../helpers'
import useDrinks from '../hooks/useDrinks';

export default function Producto(props) {

    const { producto, handleClickModal, handleSetProducto } = useDrinks()
    const { nombre, categoria_id, precio, imagen } = props.producto;

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
    
          <button 
            onClick={() => {
              handleClickModal()
              handleSetProducto(props.producto)
            }}
            className='bg-green-600 hover:bg-green-800 text-white font-medium w-full mt-auto p-1.5 rounded-md'>
              Agregar
            </button>
        </div>
      </>
    )
}