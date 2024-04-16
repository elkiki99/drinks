
import { formatearDinero } from "../helpers";
import useDrinks from "../hooks/useDrinks"
import ResumenProducto from "./ResumenProducto";

export default function Resumen() {

  const { pedido, total } = useDrinks();

  const comprobarPedido = () => pedido.length === 0

  return (
    <aside className="h-screen overflow-y-scroll p-5 w-72">
      <h1 className="text-4xl font-black">
        Mi pedido
      </h1>
      
      <p className="text-lg my-5">
        El resumen de tu pedido
      </p>

      <div className="py-10">
        {pedido.length === 0 ? (
          <p className="text-center text-2xl">
            Aún no has seleccionado ningun producto
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

      <form className="w-full">
        <div className="mt-5">
          <input  
            value="Confirmar pedido"
            type="submit"
            className={`${comprobarPedido() ? "bg-green-200" : "bg-green-600 hover:bg-green-800 cursor-pointer"}
            px-5 py-2 rounded font-bold text-white text-center w-full`}
            disabled={comprobarPedido()}
          />
        </div>
      </form>
    </aside>
  )
}
