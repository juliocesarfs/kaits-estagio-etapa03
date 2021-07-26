const getUsernameSize = () => {
  const username = document.querySelector('#username').value
  return username.replace(' ', '').length

}

const getAge = () => {
  const birthDateElement = document.querySelector('#birthDate').value
  
  if (!birthDateElement)
    return undefined

  const today = new Date()
  const birthDate = new Date(birthDateElement)

  let years = today.getFullYear() - birthDate.getFullYear()
  const month = today.getMonth() - birthDate.getMonth()

  if ((month < 0) || (month == 0 && today.getDate() <= birthDate.getDate()))
    years -= 1

  const age = {
    years: years,
    month: month
  }

  return age
}




const returnData = () => {
  const usernameSize = getUsernameSize()
  const age = getAge()
  let text

  if (!usernameSize || !age)
    text = 'Por favor, preencha todos os campos!'
  else
    text = `Tamanho do seu nome: ${usernameSize}\nVocê tem ${age.years} anos e ${age.month} meses!`



  alert(text)
}

document
  .querySelector('.form')
  .addEventListener('submit', returnData)
