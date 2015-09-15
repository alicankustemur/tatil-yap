$('#otel_and_city').autoComplete({
	  minChars: 1,
    source: function(term, suggest){
        term = term.toLowerCase();
        var choices = ['Adana', 'Mersin', 'Hatay', 'Diyarbakır', 'Sivas', 'Şanlıurfa', 'İzmir', 'C++', 'CSS', 'Clojure', 'COBOL', 'ColdFusion', 'Erlang', 'Fortran', 'Groovy', 'Haskell', 'HTML', 'Java', 'JavaScript', 'Lisp', 'Perl', 'PHP', 'PowerShell', 'Python', 'Ruby', 'Scala', 'Scheme', 'SQL', 'TeX', 'XML'];
        var suggestions = [];
        for (i=0;i<choices.length;i++)
            if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
        suggest(suggestions);
    }
});

$("#tour_and_city").autoComplete({
	minChars: 1,
    source: function(term, suggest){
        term = term.toLowerCase();
        var choices = ['Adana', 'Mersin', 'Hatay', 'Diyarbakır', 'Sivas', 'Şanlıurfa', 'İzmir', 'C++', 'CSS', 'Clojure', 'COBOL', 'ColdFusion', 'Erlang', 'Fortran', 'Groovy', 'Haskell', 'HTML', 'Java', 'JavaScript', 'Lisp', 'Perl', 'PHP', 'PowerShell', 'Python', 'Ruby', 'Scala', 'Scheme', 'SQL', 'TeX', 'XML'];
        var suggestions = [];
        for (i=0;i<choices.length;i++)
            if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
        suggest(suggestions);
    }
});

$("#from_where").autoComplete({
	minChars: 1,
    source: function(term, suggest){
        term = term.toLowerCase();
        var choices = ['Adana', 'Mersin', 'Hatay', 'Diyarbakır', 'Sivas', 'Şanlıurfa', 'İzmir', 'C++', 'CSS', 'Clojure', 'COBOL', 'ColdFusion', 'Erlang', 'Fortran', 'Groovy', 'Haskell', 'HTML', 'Java', 'JavaScript', 'Lisp', 'Perl', 'PHP', 'PowerShell', 'Python', 'Ruby', 'Scala', 'Scheme', 'SQL', 'TeX', 'XML'];
        var suggestions = [];
        for (i=0;i<choices.length;i++)
            if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
        suggest(suggestions);
    }
});

$("#where").autoComplete({
	minChars: 1,
    source: function(term, suggest){
        term = term.toLowerCase();
        var choices = ['Adana', 'Mersin', 'Hatay', 'Diyarbakır', 'Sivas', 'Şanlıurfa', 'İzmir', 'C++', 'CSS', 'Clojure', 'COBOL', 'ColdFusion', 'Erlang', 'Fortran', 'Groovy', 'Haskell', 'HTML', 'Java', 'JavaScript', 'Lisp', 'Perl', 'PHP', 'PowerShell', 'Python', 'Ruby', 'Scala', 'Scheme', 'SQL', 'TeX', 'XML'];
        var suggestions = [];
        for (i=0;i<choices.length;i++)
            if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
        suggest(suggestions);
    }
});
