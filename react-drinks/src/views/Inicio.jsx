import { productos as data } from "../data/productos"
import Producto from "../components/Producto"
import useDrinks from "../hooks/useDrinks"

export default function Inicio() {

  const { categoriaActual } = useDrinks()
  const productos = data.filter(producto => producto.categoria_id === categoriaActual.id)

  return (
    <>
      <h1 className="text-4xl m-5 font-bold">{categoriaActual.nombre}</h1>

      <p className="text-2xl m-5">Nuestros productos</p>

      <div className="grid gap-4 grid-cols-1 lg:grid-cols-2 xl:grid-cols-3">
        {productos.map(producto => (
          <Producto 
            key={producto.id}
            producto={producto}
          />
        ))}
      </div>
    </>
  )
}
