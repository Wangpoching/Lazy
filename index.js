window.addEventListener('load',
  () => {
    // 按下 submit 發生的事
    document.querySelector('form').addEventListener('submit',
      (e) => {
        let pass = true
        const nickName = document.querySelector('.nickname-input').value
        const mail = document.querySelector('.mail-input').value
        const phone = document.querySelector('.phone-input').value
        const how = document.querySelector('.how-input').value
        const other = document.querySelector('.other-input').value
        let enrolltype = ''
        if (document.querySelector('#first').checked) {
          enrolltype = document.querySelector('[for="first"]').innerText
        } else if (document.querySelector('#second').checked) {
          enrolltype = document.querySelector('[for="second"]').innerText
        }
        // 處理暱稱空白
        if (!nickName) {
          const div = document.createElement('div')
          div.classList.add('alert')
          div.innerText = '暱稱不能為空'
          document.querySelector('.nickname-block').appendChild(div)
          document.querySelector('.nickname-input').classList.add("null")
          e.preventDefault()
          pass = false
        }
        // 處理電子郵件空白
        if (!mail) {
          const div = document.createElement('div')
          div.classList.add('alert')
          div.innerText = '電子郵件不能為空'
          document.querySelector('.mail-block').appendChild(div)
          document.querySelector('.mail-input').classList.add("null")
          e.preventDefault()
          pass = false
        }
        // 處理電話空白
        if (!phone) {
          const div = document.createElement('div')
          div.classList.add('alert')
          div.innerText = '電話不能為空'
          document.querySelector('.phone-block').appendChild(div)
          document.querySelector('.phone-input').classList.add("null")
          e.preventDefault()
          pass = false
        }
        // 處理怎麼知道的空白
        if (!how) {
          const div = document.createElement('div')
          div.classList.add('alert')
          div.innerText = '怎麼知道的不能為空'
          document.querySelector('.how-block').appendChild(div)
          document.querySelector('.how-input').classList.add("null")
          e.preventDefault()
          pass = false
        }
        // 處理報名類型沒勾
        if (!enrolltype) {
          const div = document.createElement('div')
          div.classList.add('alert')
          div.innerText = '請勾選報名類型'
          document.querySelector('.enrolltype-block').appendChild(div)
          document.querySelector('input[name=options]').classList.add("null")
          e.preventDefault()
          pass = false
        }
        if (pass) {
          const info = `暱稱：${nickName}\n電子郵件：${mail}\n電話：${phone}\n報名類型：${enrolltype}\n怎麼知道這個活動：${how}\n其他：${other}`
          alert(info)
          return true
        }
      }
    )
  // focusin 消除警告
  document.querySelector('form').addEventListener('focusin', (e)=> {
    if (e.target.classList.contains("null")) {
      e.target.closest(".form__info").querySelector(".alert").classList.add("hidden")
    }
  })
  // checked 消除警告
  document.querySelector(".enrolltype-block").addEventListener('change', (e)=>{
    if (document.querySelector("input[name=options]").classList.contains("null")) {
      e.target.closest(".form__info").querySelector(".alert").classList.add("hidden")
    }    
  })
  }
)
