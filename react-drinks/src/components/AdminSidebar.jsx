import Logo from "./Logo"
import { Link } from "react-router-dom"
import { useAuth } from "../hooks/useAuth"

export default function AdminSidebar() {

    const { logout } = useAuth({middleware: 'auth'});
  return (
    <aside className="md:w-64 md:fixed h-full overflow-y-auto flex flex-col flex-auto">
        <div className="p-4">
            <Logo textSize={"6xl"} />
        </div>
        
        <nav className="flex-col flex-auto flex p-4">
            <Link to="/admin" className="hover:text-green-500 md:text-start text-center font-semibold text-2xl p-2">Pedidos</Link>
            <Link 
                to="/admin/productos" className="hover:text-green-500 md:text-start text-center font-semibold text-2xl p-2">Productos
            </Link>
        </nav>

        <div className="flex-wrap-reverse p-5 md:mt-5">
            <button
                type="button"
                className="bg-red-600 hover:bg-red-800 cursor-pointer px-5 py-2 rounded font-bold text-white text-center w-full"
                onClick={logout}
            >Cerrar sesión
            </button>
        </div>
    </aside>
  )
}
