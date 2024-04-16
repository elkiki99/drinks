
import { useState, useEffect } from "react";
import useDrinks from "../hooks/useDrinks"
import { formatearDinero } from "../helpers";

export default function ModalProducto() {

    const { producto, handleClickModal, handleAgregarPedido, pedido  } = useDrinks();
    const [ cantidad, setCantidad ] = useState(1)
    const [ edicion, setEdicion ] = useState(false)

    useEffect(() => {
        if(pedido.some( pedidoState => pedidoState.id === producto.id)) {
            const productoEdicion = pedido.filter(pedidoState => pedidoState.id === producto.id)[0]
            setCantidad(productoEdicion.cantidad)
            setEdicion(true)
        }
    }, [pedido])

    return (
      <div className="md:flex gap-10 min-h-96">
        <div className="md:w-1/3">
            <img
                className="w-72"
                alt={`Imagen producto ${producto.nombre}`}
                src={`/img/${producto.imagen}.webp`}
            />
        </div>

        <div className="md:w-2/3 flex flex-col">
            <div className="flex justify-end">
                <button
                    onClick={handleClickModal}
                >
                    <svg 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        strokeWidth={1.5} 
                        stroke="currentColor" 
                        className="w-6 h-6"
                    >
                    <path 
                        strokeLinecap="round" 
                        strokeLinejoin="round" 
                        d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" 
                    />
                    </svg>
                </button>
            </div>

            <h1 className="text-3xl font-bold mt-5"> 
                {producto.nombre}
            </h1>

            <p className="mt-5 text-green-500 text-5xl font-black">
                {formatearDinero(producto.precio)}
            </p>

            <div className="flex gap-4 mt-5">
                <button type="button" onClick={() => {
                        if(cantidad <= 1) return
                        setCantidad(cantidad - 1)
                    }}>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M5 12h14" />
                    </svg>
                </button>
                
                <p className="text-3xl">{cantidad}</p>
                
                <button type="button" onClick={() => {
                    if(cantidad >= 10) return
                    setCantidad(cantidad + 1)
                }}>    
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </div>

            <div className="w-full md:mt-auto mt-5">
                <button
                    onClick={() => {
                        handleAgregarPedido({...producto, cantidad})
                        handleClickModal()
                    }}
                    type="button"
                    className="bg-green-600 hover:bg-green-800 px-5 py-2 text-white rounded font-bold flex-end"
                >
                {edicion ? 'Guardar Cambios' : 'Añadir al pedido' }
                </button>
            </div>

        </div>
      </div>
    )
  }
  