import Image from "next/image";

export default function Home() {
  return (
    <main className="content-wrapper">
      <section className="lg:-mx-12">
        <div className="w-full flex text-white bg-slate-500 px-12 py-32 rounded-tl-[8rem] rounded-br-[8rem] rounded-bl-lg rounded-tr-lg">
          <div className="w-1/2">
            <h1 className="text-7xl font-extrabold">Study, work, and live in Canada</h1>
            <p className="text-white/75 text-xl mt-4">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui Lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat.</p>
            <div className="flex items-center space-x-4 mt-12 text-lg">
              <button className="bg-secondary-500 hover:bg-secondary-600 text-slate-500 px-8 py-3 font-semibold rounded-full">Get Started</button>
              <button className="hover:bg-secondary-500/20 text-secondary-500 px-8 py-3 font-semibold rounded-full">Learn More</button>
            </div>
          </div>
        </div>
      </section>
      
      <section className="py-24">
        <div className="w-full text-center pb-12">
          <h2 className="text-4xl font-extrabold">How it works</h2>
        </div>
        
        <div className="flex -mx-4">
          <div className="w-1/3 p-4 flex">
            <div className="h-16 w-16 bg-slate-200"></div>
            <div className="pl-4 flex-1">
              <p className="text-lg font-bold">Browse programs</p>
              <p className="text-slate-500/75">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit below.</p>
            </div>
          </div>
          
          <div className="w-1/3 p-4 flex">
            <div className="h-16 w-16 bg-slate-200"></div>
            <div className="pl-4 flex-1">
              <p className="text-lg font-bold">Apply & Interview</p>
              <p className="text-slate-500/75">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi.</p>
            </div>
          </div>
          
          <div className="w-1/3 p-4 flex">
            <div className="h-16 w-16 bg-slate-200"></div>
            <div className="pl-4 flex-1">
              <p className="text-lg font-bold">Lorem ipsum</p>
              <p className="text-slate-500/75">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit below.</p>
            </div>
          </div>
        </div>
      </section>
      
      <section className="flex flex-col">
        <div className="w-full text-center pb-12 space-y-8 flex flex-col items-center">
          <h2 className="text-4xl font-extrabold">Browse Programs & Universities</h2>
          
          <div className="group w-2/3 flex border rounded-full border-slate-100 focus-within:outline outline-1 outline-primary-400">
            <button className="bg-secondary-400 hover:bg-secondary-500 font-semibold text-slate-500 rounded-l-full px-8 py-3 flex space-x-2 items-center">
              <span>Programs</span>
              <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.5 10L12.5 15L17.5 10" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
            
            <div className="flex-1 bg-white rounded-r-full flex items-stretch">
              <input type="text" placeholder="Search for programs" className="flex-1 pl-6 pr-[3rem] py-3 bg-transparent border-0 focus:outline-none" />
              
              <button className="py-3 pr-6">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.6">
                    <path d="M21 21L15 15M3 10C3 10.9193 3.18106 11.8295 3.53284 12.6788C3.88463 13.5281 4.40024 14.2997 5.05025 14.9497C5.70026 15.5998 6.47194 16.1154 7.32122 16.4672C8.1705 16.8189 9.08075 17 10 17C10.9193 17 11.8295 16.8189 12.6788 16.4672C13.5281 16.1154 14.2997 15.5998 14.9497 14.9497C15.5998 14.2997 16.1154 13.5281 16.4672 12.6788C16.8189 11.8295 17 10.9193 17 10C17 9.08075 16.8189 8.1705 16.4672 7.32122C16.1154 6.47194 15.5998 5.70026 14.9497 5.05025C14.2997 4.40024 13.5281 3.88463 12.6788 3.53284C11.8295 3.18106 10.9193 3 10 3C9.08075 3 8.1705 3.18106 7.32122 3.53284C6.47194 3.88463 5.70026 4.40024 5.05025 5.05025C4.40024 5.70026 3.88463 6.47194 3.53284 7.32122C3.18106 8.1705 3 9.08075 3 10Z" stroke="#545454" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </g>
                </svg>
              </button>
            </div>
          </div>
        </div>
        
        <div className="flex items-top -mx-3">
          {[...Array(3)].map((_, i) => (
            <div key={i} className="w-1/3 p-3 flex flex-col shadow-none rounded-xl bg-transparent border-0 hover: hover:border hover:bg-white hover:shadow-lg hover:scale-[1.03] transition-all">
              <div className="h-48 w-full bg-slate-400 rounded-lg"></div>
              <div className="w-full pt-4 flex items-center">
                <div className="flex-1 pr-4">
                  <p className="font-semibold">Computer Science</p>
                  <p className="text-slate-500/75">Offered by 3 universities</p>
                </div>
                
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.33331 6.49998H12M12 6.49998L7.33331 1.83331M12 6.49998L7.33331 11.1666" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
            </div>
          ))}
        </div>
        
        <button className="bg-secondary-500 hover:bg-secondary-600 text-slate-500 px-8 py-3 font-semibold rounded-full self-center mt-20 flex items-center space-x-3">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.19 12.19L4 16L7.81 7.81L16 4M10 0C8.68678 0 7.38642 0.258658 6.17317 0.761205C4.95991 1.26375 3.85752 2.00035 2.92893 2.92893C1.05357 4.8043 0 7.34784 0 10C0 12.6522 1.05357 15.1957 2.92893 17.0711C3.85752 17.9997 4.95991 18.7362 6.17317 19.2388C7.38642 19.7413 8.68678 20 10 20C12.6522 20 15.1957 18.9464 17.0711 17.0711C18.9464 15.1957 20 12.6522 20 10C20 8.68678 19.7413 7.38642 19.2388 6.17317C18.7362 4.95991 17.9997 3.85752 17.0711 2.92893C16.1425 2.00035 15.0401 1.26375 13.8268 0.761205C12.6136 0.258658 11.3132 0 10 0ZM10 8.9C9.70826 8.9 9.42847 9.01589 9.22218 9.22218C9.01589 9.42847 8.9 9.70826 8.9 10C8.9 10.2917 9.01589 10.5715 9.22218 10.7778C9.42847 10.9841 9.70826 11.1 10 11.1C10.2917 11.1 10.5715 10.9841 10.7778 10.7778C10.9841 10.5715 11.1 10.2917 11.1 10C11.1 9.70826 10.9841 9.42847 10.7778 9.22218C10.5715 9.01589 10.2917 8.9 10 8.9Z" fill="black"/>
          </svg>

          <span>Browse more universities</span>
        </button>
      </section>
      
      <section className="py-24">
        <div className="w-full text-center pb-12">
          <h2 className="text-4xl font-extrabold">Our Services</h2>
        </div>
        
        <div className="flex items-top -mx-4 mt-3">
          <div className="w-1/3 p-4">
            <div className="bg-gray-50 rounded-lg p-8 flex flex-col items-center text-center">
              <div className="bg-primary-500 h-12 w-12 rounded shadow-lg mb-4 -mt-14"></div>
              <h3 className="font-semibold text-lg mb-2 mt-6">Lorem Ipsum</h3>
              <p className="text-slate-500/75">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
            </div>
          </div>
          
          <div className="w-1/3 p-4">
            <div className="bg-gray-50 rounded-lg p-8 flex flex-col items-center text-center">
              <div className="bg-primary-500 h-12 w-12 rounded shadow-lg mb-4 -mt-14"></div>
              <h3 className="font-semibold text-lg mb-2 mt-6">Lorem Ipsum</h3>
              <p className="text-slate-500/75">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
            </div>
          </div>
          
          <div className="w-1/3 p-4">
            <div className="bg-gray-50 rounded-lg p-8 flex flex-col items-center text-center">
              <div className="bg-primary-500 h-12 w-12 rounded shadow-lg mb-4 -mt-14"></div>
              <h3 className="font-semibold text-lg mb-2 mt-6">Lorem Ipsum</h3>
              <p className="text-slate-500/75">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
            </div>
          </div>
        </div>
      </section>
      
      <section className="py-24">
        <div className="w-full text-center pb-12">
          <h2 className="text-4xl font-extrabold">Frequently Asked Questions</h2>
        </div>
        
        <div className="max-w-2xl mx-auto w-full divide-y border-t-2">
          {[...Array(4)].map((_, i) => (
            <div key={i} className="py-5">
              <div className="flex items-center justify-between">
                <span className="inline-block text-lg font-semibold">What’s the best thing about Switzerland?</span>
                <svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15 1L8 8L1 1" stroke="#9CA3AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              
              <div className="pt-3">
                <p className="text-slate-500/75">I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</p>
              </div>
            </div>
          ))}
        </div>
      </section>
      
      <section className="py-24">
        <div className="w-full text-center pb-12">
          <h2 className="text-2xl font-semibold">Partnered with more than 20+ colleges and universities across Canada</h2>
        </div>
        
        <div className="max-w-5xl w-full mx-auto">
          <div className="flex justify-center flex-wrap -mx-4">
          {[...Array(6)].map((_, i) => (
            <div key={i} className="p-4">
              <div className="w-48 h-20 bg-slate-100"></div>
            </div>
          ))}
          </div>
        </div>
      </section>
      
      <section className="flex shadow-2xl rounded-2xl">
        <div className="w-1/3 bg-secondary-500 rounded-l-2xl p-12">
          <div className="space-y-2">
            <h3 className="text-3xl text-primary-500 font-bold">Contact Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur </p>
          </div>
        </div>
        
        <div className="w-2/3 bg-white rounded-r-2xl p-12">
          <div className="flex flex-wrap -mx-4">
            <div className="w-1/2 p-4 flex flex-col space-y-2">
              <label className="font-semibold" htmlFor="first_name">First Name</label>
              <input type="text" id="first_name" placeholder="Juan" className="py-4 border-b-2 focus:outline-none focus:border-primary-500 focus:bg-slate-50/40 transition-colors" />
            </div>
            
            <div className="w-1/2 p-4 flex flex-col space-y-2">
              <label className="font-semibold" htmlFor="first_name">First Name</label>
              <input type="text" id="first_name" placeholder="Juan" className="py-4 border-b-2 focus:outline-none focus:border-primary-500 focus:bg-slate-50/40 transition-colors" />
            </div>
            
            <div className="w-1/2 p-4 flex flex-col space-y-2">
              <label className="font-semibold" htmlFor="first_name">First Name</label>
              <input type="text" id="first_name" placeholder="Juan" className="py-4 border-b-2 focus:outline-none focus:border-primary-500 focus:bg-slate-50/40 transition-colors" />
            </div>
            
            <div className="w-1/2 p-4 flex flex-col space-y-2">
              <label className="font-semibold" htmlFor="first_name">First Name</label>
              <input type="text" id="first_name" placeholder="Juan" className="py-4 border-b-2 focus:outline-none focus:border-primary-500 focus:bg-slate-50/40 transition-colors" />
            </div>
          </div>
        </div>
      </section>
    </main>
  );
}
