<?php
	require_once("book.php");

	$books = array (
		new Book("Paradise Lost", "John Milton", "Penguin", "Poetry", "0-14-042363-X", "../../media/Paradise_Lost", "The quintessential work of English poetry, John Milton's Paradise Lost is a work that transcends the ages. A story of the fall, and redemption of mankind, Milton's Satan is said to be one of the greatest villians ever created. ", array ("soft" => "10", "hard" => "20", "audio" => "5", "graphic" => "40"), "Eddy Murphy", 0),
		new Book("Mr Happy", "Roger Hargreaves", "Thurman Publishing", "Childrens", "0-85985=091-9", "../../media/Mr_Happy", "A story about a man who leans that happiness can truly be contagious", array ("soft" => "5", "hard" => "10", "audio" => "2", "graphic" => "20"), "", 1),
		new Book("Civil War", "Julius Caesar", "Penguin Classics", "History", "0-140-44187-5", "../../media/Caeser", "The diary, translated into English, of Caesar's battle against Pompey", array ("soft" => "15", "hard" => "30", "audio" => "5", "graphic" => "80"), "Jim Carrey", 2),
		new Book("I, Robot", "Isaac Asimov", "HarperCollins", "Sci-Fi", "0-586-02532-4", "../../media/I-Robot", "A collection of shorts stories exploring the complexities regarding robots and mechanical men", array ("soft" => "10", "hard" => "20", "audio" => "5", "graphic" => "25"), "Jane Austin", 3),
		new Book("The Left Hand of Darkness", "Ursula Le Guin", "SF Masterworks", "Sci-Fu", "978-1-475-22162-8", "../../media/Left-Hand", "An athropologists finds himself learning much more about the race that he is studying than he expected", array ("soft" => "20", "hard" => "40", "audio" => "10", "graphic" => "50"), "Donald Trump", 4),
		new Book("Poetical Works of Lord Byron", "Lord Byron", "Ward, Lock & Co", "Poetry", "X-XXXX-XXXX-X", "../../media/Byron", "The complete collection of the works on the lover's poet and the man that helped to liberate Greece", array ("soft" => "10", "hard" => "30", "audio" => "5", "graphic" => "40"), "",5),
		new Book("Cat's Cradle", "Kurt Vonnegut", "Dial Press", "Sci-Fi", "0-385-33348-X", "../../media/Cat's_Cradle", "When one discovers that he is the last man left alive on Earth, even that isn't the best place to find love", array ("soft" => "10", "hard" => "20", "audio" => "5", "graphic" => "30"), "Rowan Atkinson",6),
		new Book("Praise of Folly", "Desiderius Erasmus", "Alma Classics", "Comedy", "978-1-84749-324-8", "../../media/Folly", "A classic work of Renaissance Europe where the writer challenges the precepts of the Catholic Church", array ("soft" => "15", "hard" => "30", "audio" => "10", "graphic" => "40"), "Kim Kardasian",7),
		new Book("Catch 22", "Joseph Heller", "Corgi", "Comedy", "552-08125-6", "../../media/Catch-22", "The absurdity of life in on an airforce base during the American campaign to retake Italy", array ("soft" => "10", "hard" => "20", "audio" => "5", "graphic" => "40"), "Linus Torvald",8),
	);
	

?>