import Button from "@/components/Button";
import Image from "next/image";

export default function Home() {
  return (
    <main className="content-wrapper">
      <section className="px-3 xl:px-0 xl:-mx-12">
        <div className="w-full flex text-white bg-slate-500 px-12 py-32 rounded-tl-[8rem] rounded-br-[8rem] rounded-bl-lg rounded-tr-lg">
          <div className="w-1/2">
            <h1 className="text-7xl font-extrabold">Study, work, and live in Canada</h1>
            <p className="text-white/75 text-xl mt-4">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui Lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat.</p>
            <div className="flex items-center space-x-4 mt-12 text-lg">
              <Button variant="secondary">Get Started</Button>
              <Button variant="secondary-text">Learn More</Button>
            </div>
          </div>
        </div>
      </section>
      
      <section className="py-24">
        <div className="w-full text-center pb-12">
          <h2 className="text-4xl font-extrabold">How it works</h2>
        </div>
        
        <div className="flex px-2 -mx-4">
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
            <Button variant="secondary" className="rounded-r-none">
              <span>Programs</span>
              <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.5 10L12.5 15L17.5 10" stroke="black" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
              </svg>
            </Button>
            
            <div className="flex-1 bg-white rounded-r-full flex items-stretch">
              <input type="text" placeholder="Search for programs" className="flex-1 pl-6 pr-[3rem] py-3 bg-transparent border-0 focus:outline-none" />
              
              <button className="py-3 pr-6">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.6">
                    <path d="M21 21L15 15M3 10C3 10.9193 3.18106 11.8295 3.53284 12.6788C3.88463 13.5281 4.40024 14.2997 5.05025 14.9497C5.70026 15.5998 6.47194 16.1154 7.32122 16.4672C8.1705 16.8189 9.08075 17 10 17C10.9193 17 11.8295 16.8189 12.6788 16.4672C13.5281 16.1154 14.2997 15.5998 14.9497 14.9497C15.5998 14.2997 16.1154 13.5281 16.4672 12.6788C16.8189 11.8295 17 10.9193 17 10C17 9.08075 16.8189 8.1705 16.4672 7.32122C16.1154 6.47194 15.5998 5.70026 14.9497 5.05025C14.2997 4.40024 13.5281 3.88463 12.6788 3.53284C11.8295 3.18106 10.9193 3 10 3C9.08075 3 8.1705 3.18106 7.32122 3.53284C6.47194 3.88463 5.70026 4.40024 5.05025 5.05025C4.40024 5.70026 3.88463 6.47194 3.53284 7.32122C3.18106 8.1705 3 9.08075 3 10Z" stroke="#545454" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
                  </g>
                </svg>
              </button>
            </div>
          </div>
        </div>
        
        <div className="flex items-top px-3 -mx-3">
          {[...Array(3)].map((_, i) => (
            <a href="#" key={i} className="w-1/3 p-3 flex flex-col shadow-none rounded-xl bg-transparent border-0 hover: hover:border hover:bg-white hover:shadow-lg hover:scale-[1.03] transition-all">
              <div className="h-48 w-full bg-slate-400 rounded-lg"></div>
              <div className="w-full pt-4 flex items-center">
                <div className="flex-1 pr-4">
                  <p className="font-semibold">Computer Science</p>
                  <p className="text-slate-500/75">Offered by 3 universities</p>
                </div>
                
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.33331 6.49998H12M12 6.49998L7.33331 1.83331M12 6.49998L7.33331 11.1666" stroke="black" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
                </svg>
              </div>
            </a>
          ))}
        </div>
        
        <Button as="a" variant="secondary" href="#" className="self-center mt-20">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.19 12.19L4 16L7.81 7.81L16 4M10 0C8.68678 0 7.38642 0.258658 6.17317 0.761205C4.95991 1.26375 3.85752 2.00035 2.92893 2.92893C1.05357 4.8043 0 7.34784 0 10C0 12.6522 1.05357 15.1957 2.92893 17.0711C3.85752 17.9997 4.95991 18.7362 6.17317 19.2388C7.38642 19.7413 8.68678 20 10 20C12.6522 20 15.1957 18.9464 17.0711 17.0711C18.9464 15.1957 20 12.6522 20 10C20 8.68678 19.7413 7.38642 19.2388 6.17317C18.7362 4.95991 17.9997 3.85752 17.0711 2.92893C16.1425 2.00035 15.0401 1.26375 13.8268 0.761205C12.6136 0.258658 11.3132 0 10 0ZM10 8.9C9.70826 8.9 9.42847 9.01589 9.22218 9.22218C9.01589 9.42847 8.9 9.70826 8.9 10C8.9 10.2917 9.01589 10.5715 9.22218 10.7778C9.42847 10.9841 9.70826 11.1 10 11.1C10.2917 11.1 10.5715 10.9841 10.7778 10.7778C10.9841 10.5715 11.1 10.2917 11.1 10C11.1 9.70826 10.9841 9.42847 10.7778 9.22218C10.5715 9.01589 10.2917 8.9 10 8.9Z" fill="black"/>
          </svg>

          <span>Browse more universities</span>
        </Button>
      </section>
      
      <section className="py-24">
        <div className="w-full text-center pb-12">
          <h2 className="text-4xl font-extrabold">Our Services</h2>
        </div>
        
        <div className="flex items-top px-4 -mx-4 mt-3">
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
                  <path d="M15 1L8 8L1 1" stroke="#9CA3AF" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
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
        <div className="w-1/3 bg-secondary-500 rounded-l-2xl p-12 flex flex-col justify-between">
          <div className="space-y-2">
            <h3 className="text-3xl text-primary-500 font-bold">Contact Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur </p>
          </div>

          <div className="flex flex-col space-y-4">
            <div className="flex space-x-4">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 10.999H22C22 5.869 18.127 2 12.99 2V4C17.052 4 20 6.943 20 10.999Z" fill="#20252F"/>
                <path d="M13 7.99999C15.103 7.99999 16 8.89699 16 11H18C18 7.77499 16.225 5.99999 13 5.99999V7.99999ZM16.422 13.443C16.2299 13.2683 15.9774 13.1752 15.7178 13.1832C15.4583 13.1912 15.212 13.2998 15.031 13.486L12.638 15.947C12.062 15.837 10.904 15.476 9.71201 14.287C8.52001 13.094 8.15901 11.933 8.05201 11.361L10.511 8.96699C10.6974 8.78612 10.8061 8.53982 10.8142 8.2802C10.8222 8.02059 10.7289 7.76804 10.554 7.57599L6.85901 3.51299C6.68405 3.32035 6.44089 3.2035 6.18116 3.18725C5.92143 3.17101 5.66561 3.25665 5.46801 3.42599L3.29801 5.28699C3.12512 5.46051 3.02193 5.69145 3.00801 5.93599C2.99301 6.18599 2.70701 12.108 7.29901 16.702C11.305 20.707 16.323 21 17.705 21C17.907 21 18.031 20.994 18.064 20.992C18.3085 20.9783 18.5393 20.8747 18.712 20.701L20.572 18.53C20.7415 18.3325 20.8273 18.0768 20.8112 17.817C20.7952 17.5573 20.6785 17.3141 20.486 17.139L16.422 13.443Z" fill="#20252F"/>
              </svg>

              <span className="flex-1">+1012 3456 789</span>
            </div>

            <div className="flex space-x-4">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 4H2V20H22V4ZM20 8L12 13L4 8V6L12 11L20 6V8Z" fill="#20252F"/>
              </svg>

              <span className="flex-1">demo@gmail.com</span>
            </div>

            <div className="flex space-x-4">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 1.5C9.81275 1.50258 7.71583 2.3726 6.16921 3.91922C4.6226 5.46584 3.75257 7.56276 3.74999 9.75C3.74737 11.5374 4.33123 13.2763 5.41199 14.7C5.41199 14.7 5.63699 14.9963 5.67374 15.039L12 22.5L18.3292 15.0353C18.3622 14.9955 18.588 14.7 18.588 14.7L18.5887 14.6978C19.669 13.2747 20.2526 11.5366 20.25 9.75C20.2474 7.56276 19.3774 5.46584 17.8308 3.91922C16.2842 2.3726 14.1872 1.50258 12 1.5ZM12 12.75C11.4066 12.75 10.8266 12.5741 10.3333 12.2444C9.83994 11.9148 9.45542 11.4462 9.22835 10.8981C9.00129 10.3499 8.94188 9.74667 9.05764 9.16473C9.17339 8.58279 9.45912 8.04824 9.87867 7.62868C10.2982 7.20912 10.8328 6.9234 11.4147 6.80764C11.9967 6.69189 12.5999 6.7513 13.148 6.97836C13.6962 7.20542 14.1648 7.58994 14.4944 8.08329C14.824 8.57664 15 9.15666 15 9.75C14.999 10.5453 14.6826 11.3078 14.1202 11.8702C13.5578 12.4326 12.7953 12.749 12 12.75Z" fill="#20252F"/>
              </svg>

              <span className="flex-1">132 Dartmouth Street Boston, Massachusetts 02156 United States</span>
            </div>
          </div>
        </div>
        
        <div className="w-2/3 bg-white rounded-r-2xl p-12 flex flex-col">
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
              <label className="font-semibold" htmlFor="email">E-mail</label>
              <input type="text" id="email" placeholder="example@example.com" className="py-4 border-b-2 focus:outline-none focus:border-primary-500 focus:bg-slate-50/40 transition-colors" />
            </div>
            
            <div className="w-1/2 p-4 flex flex-col space-y-2">
              <label className="font-semibold" htmlFor="phone">Phone Number</label>
              <input type="text" id="phone" placeholder="+639xxxxx" className="py-4 border-b-2 focus:outline-none focus:border-primary-500 focus:bg-slate-50/40 transition-colors" />
            </div>

            <div className="w-full p-4 flex flex-col space-y-2">
              <span className="font-semibold">Preferred communication method</span>
              <div className="flex flex-row space-x-2">
              {["Messenger", "WhatsApp", "Viber", "E-mail"].map(mode => (
                <div key={`mode_${mode}`} className="w-1/4 py-4">
                  <label className="space-x-2">
                    <input type="radio" name="preferred_comm_method" />
                    <span className="font-semibold">{mode}</span>
                  </label>
                </div>
              ))}
              </div>
            </div>

            <div className="w-full p-4 flex flex-col space-y-2">
              <label htmlFor="message" className="font-semibold">Message</label>
              <textarea name="message" placeholder="Write your inquiry" rows={10} className="py-4 border-b-2 focus:outline-none focus:border-primary-500 focus:bg-slate-50/40 transition-colors"></textarea>
            </div>
          </div>

          <Button variant="secondary" className="self-end shadow">Send Message</Button>
        </div>
      </section>
    </main>
  );
}
