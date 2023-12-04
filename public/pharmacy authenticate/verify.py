import sys
from selenium import webdriver
from time import sleep
from selenium.common import exceptions
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.keys import Keys

license_number = sys.argv[1]

chrome_options = Options()
chrome_options.add_argument('--headless')  # Run Chrome in headless mode

# Create a WebDriver instance with Chrome
driver = webdriver.Chrome(options=chrome_options)
allRes = []
url = 'https://pcncore.azurewebsites.net/PublicSearch/SearchForPharmacist'
driver.get(url)
sleep(6.5)
entry = driver.find_element(By.XPATH,'/html/body/div[1]/div[2]/div[2]/input')
search_b = driver.find_element(By.XPATH,'/html/body/div[1]/div[2]/div[2]/div/button')
entry.send_keys(license_number)
search_b.send_keys(Keys.RETURN)
sleep(6.5)

try:
    results = driver.find_element(By.CLASS_NAME,'k-master-row')
    details = results.find_elements(By.TAG_NAME,'td')
    res = [i.text for i in details]
    res.pop()
    allRes.append(res)
    print("Verification Successful")
except exceptions.NoSuchElementException:
    print("Verification Unsuccessful")
driver.quit()