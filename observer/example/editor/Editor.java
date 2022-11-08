package refactoring_guru.observer.example.editor;

import refactoring_guru.observer.example.publisher.EventManager;

import java.io.File;

public class Editor {
    public EventManager events1;
    private File file;
	public Object events;

    public Editor() {
        this.events1 = new EventManager("open", "save");
    }

    public void openFile(String filePath) {
        this.file = new File(filePath);
        events1.notify("open", file);
    }

    public void saveFile() throws Exception {
        if (this.file != null) {
            events1.notify("save", file);
        } else {
            throw new Exception("Please open a file first.");
        }
    }
}