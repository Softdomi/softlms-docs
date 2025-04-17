document.addEventListener('DOMContentLoaded', function() {
    // الحصول على عناصر البحث
    const searchInput = document.getElementById('docsSearch');
    const searchResults = document.getElementById('searchResults');
    
    if (!searchInput || !searchResults) return;
    
    let searchTimeout;
    
    // إضافة حدث للبحث عند الكتابة
    searchInput.addEventListener('input', function() {
        const query = this.value.trim();
        
        // مسح المؤقت السابق إذا وجد
        clearTimeout(searchTimeout);
        
        // إخفاء نتائج البحث إذا كان النص فارغاً
        if (query.length === 0) {
            searchResults.innerHTML = '';
            searchResults.classList.add('hidden');
            return;
        }
        
        // تعيين مؤقت جديد (300 مللي ثانية)
        searchTimeout = setTimeout(function() {
            // إرسال طلب البحث
            fetch(`doc-search.php?q=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(results => {
                    // إعادة تعيين نتائج البحث
                    searchResults.innerHTML = '';
                    
                    // إذا لم تكن هناك نتائج
                    if (results.length === 0) {
                        searchResults.innerHTML = `
                            <div class="p-4 text-center text-gray-500">
                                لا توجد نتائج للبحث عن "${query}"
                            </div>
                        `;
                        searchResults.classList.remove('hidden');
                        return;
                    }
                    
                    // إنشاء قائمة النتائج
                    const resultsList = document.createElement('ul');
                    resultsList.className = 'divide-y divide-gray-200';
                    
                    // إضافة كل نتيجة إلى القائمة
                    results.forEach(result => {
                        const listItem = document.createElement('li');
                        
                        listItem.innerHTML = `
                            <a href="${result.url}" class="block p-4 hover:bg-gray-50">
                                <div class="font-medium text-primary">${result.title}</div>
                                <div class="text-sm text-gray-500">${result.page_title}</div>
                            </a>
                        `;
                        
                        resultsList.appendChild(listItem);
                    });
                    
                    // إضافة القائمة إلى حاوية النتائج
                    searchResults.appendChild(resultsList);
                    searchResults.classList.remove('hidden');
                })
                .catch(error => {
                    console.error('خطأ في البحث:', error);
                    searchResults.innerHTML = `
                        <div class="p-4 text-center text-red-500">
                            حدث خطأ أثناء البحث. يرجى المحاولة مرة أخرى.
                        </div>
                    `;
                    searchResults.classList.remove('hidden');
                });
        }, 300);
    });
    
    // إخفاء نتائج البحث عند النقر خارجها
    document.addEventListener('click', function(event) {
        if (!searchInput.contains(event.target) && !searchResults.contains(event.target)) {
            searchResults.classList.add('hidden');
        }
    });
    
    // عرض نتائج البحث عند التركيز على حقل البحث
    searchInput.addEventListener('focus', function() {
        if (this.value.trim().length > 0 && searchResults.children.length > 0) {
            searchResults.classList.remove('hidden');
        }
    });
});