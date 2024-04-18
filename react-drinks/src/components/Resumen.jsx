
import { formatearDinero } from "../helpers";
import useDrinks from "../hooks/useDrinks"
import ResumenProducto from "./ResumenProducto";
import { useAuth } from '../hooks/useAuth'

export default function Resumen() {

  const { pedido, total, handleSubmitNuevaOrden } = useDrinks();
  const { logout, user,  } = useAuth({})

  const comprobarPedido = () => pedido.length === 0

  const handleSubmit = e => {
    e.preventDefault();

    handleSubmitNuevaOrden( logout );

  }

  return (
    <aside className="md:w-64 p-3 fixed bottom-0 bg-gray-100 w-full md:max-h-full max-h-52 md:right-0 h-full overflow-y-auto">
      <h1 className="text-4xl font-black text-center md:text-start p-2">
        Mi pedido
      </h1>

      <div className="py-10">
        {pedido.length === 0 ? (
          <p className="md:text-start text-center text-2xl">
            <span className="font-semibold">{user?.name} <br /> </span>¡Comienza agregando algún producto!
          </p>
        ) : (
          pedido.map(producto => (
            <ResumenProducto 
              key={producto.id}
              producto={producto}
            />
          ))
        )}
      </div>

      <p className="text-xl mt-10">
        Total: {''}
        {formatearDinero(total)}
      </p>

      <form className="w-full"
        onSubmit={handleSubmit}
      >
        <div className="mt-5">
          <input  
            value="Hacer pedido"
            type="submit"
            className={`${comprobarPedido() ? "bg-green-300" : "bg-green-600 hover:bg-green-800 cursor-pointer"}
            px-5 py-2 rounded font-bold text-white text-center w-full`}
            disabled={comprobarPedido()}
          />
        </div>
      </form>

      {/* <div className="my-5 w-full">
        <button
          type="button"
          className={`${comprobarPedido() ? "bg-red-300" : "bg-red-600 hover:bg-red-800 cursor-pointer"}
          px-5 py-2 rounded font-bold text-white text-center w-full`}
          onClick={logout}
          disabled={comprobarPedido()}
        >
          Cancelar pedido
        </button> */}
      {/* </div> */}

      
      {user ? null : (
        <p className="py-10 md:text-start text-center"><a className="text-green-500" href="/auth/login">Inicia sesión</a> para completar la compra</p>
      )}
    </aside>
  )
}
