// import { productos as data } from "../data/productos"
import useSWR from "swr"
import Producto from "../components/Producto"
import clienteAxios from "../config/axios"
import useDrinks from "../hooks/useDrinks"

export default function Inicio() {

  const { categoriaActual } = useDrinks()

  //SWR
  const fetcher = () => clienteAxios('/api/productos').then(data => data.data)
  const { data, error, isLoading } = useSWR('/api/productos', fetcher, {
    refreshInterval: 1000
  })

  if(isLoading) return 'Cargando...';
  const productos = data.data.filter(producto => producto.categoria_id === categoriaActual.id)


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
