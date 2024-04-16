export default function Logo({ textSize }) {
    return (
      <div className={`mx-auto max-w-96`}> {/* Tamaño máximo ajustable */}
        <a href="/">
          <p className={`text-${textSize} font-semibold text-green-400`}>
            e<span className="text-black">Drinks</span>
          </p>
        </a>
      </div>
    );
  }