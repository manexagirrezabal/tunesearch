

import java.io.File;

import javax.sound.midi.MidiEvent;
import javax.sound.midi.MidiMessage;
import javax.sound.midi.MidiSystem;
import javax.sound.midi.Sequence;
import javax.sound.midi.ShortMessage;
import javax.sound.midi.Track;

public class Index {
    public static final int NOTE_ON = 0x90;
    public static final int NOTE_OFF = 0x80;
    public static final String[] NOTE_NAMES = {"C", "C#", "D", "D#", "E", "F", "F#", "G", "G#", "A", "A#", "B"};

    public static void main(String[] args) throws Exception {
    	String filename = args[0];
        Sequence sequence = MidiSystem.getSequence(new File(filename));
        //Sequence sequence = MidiSystem.getSequence(new File("/Users/manex/corpusak/midiak/liburukia2_0602a.mid"));

        String notak[] = new String[400];
        String lehenNota = "";
        notak[0]="";
        int trackNumber = 0;
        long aurrekoTxanel = -1;
        long txanel = 0;
        int pos = 0;
        for (Track track :  sequence.getTracks()) {
            trackNumber++;
//            System.out.println("Track " + trackNumber + ": size = " + track.size());
//            System.out.println();
            for (int i=0; i < track.size(); i++) { 
                MidiEvent event = track.get(i);
                txanel = event.getTick();
//                System.out.print("@" + event.getTick() + " ");
                MidiMessage message = event.getMessage();
                if (message instanceof ShortMessage) {
                    ShortMessage sm = (ShortMessage) message;
//                    System.out.print("Channel: " + sm.getChannel() + " ");
                    if (sm.getCommand() == NOTE_ON) {
                        int key = sm.getData1();
                        int octave = (key / 12)-1;
                        int note = key % 12;
                        String noteName = NOTE_NAMES[note];
                        int velocity = sm.getData2();
                        if (txanel != aurrekoTxanel) {
                        	if (pos == 0) {
                        		lehenNota=noteName+octave+"_"+key;
                        	}
                        	notak[pos]=""+key;
                        	pos++;
                        	aurrekoTxanel = txanel;
                        }
//                        System.out.println("Note on, " + noteName + octave + " key=" + key + " velocity: " + velocity);
                        //System.out.print(noteName+octave+" ");
                    } else if (sm.getCommand() == NOTE_OFF) {
                        int key = sm.getData1();
                        int octave = (key / 12)-1;
                        int note = key % 12;
                        String noteName = NOTE_NAMES[note];
                        int velocity = sm.getData2();
//                        System.out.println("Note off, " + noteName + octave + " key=" + key + " velocity: " + velocity);
                    } else {
//                        System.out.println("Command:" + sm.getCommand());
                    }
                } else {
//                    System.out.println("Other message: " + message.getClass());
                }
            }

//            System.out.println();
        }
        
//        System.out.println(txanel);
//        System.out.println(aurrekoTxanel);
        //for (int i=0; i<notak.length; i++) {
        //	if (notak[i] != null) System.out.print(notak[i]+" ");
        //}
//        System.out.println(lehenNota);
        int leihoTam=5;
        for (int i=0; i<notak.length-leihoTam; i++) {
        	if (notak[i+leihoTam] != null) {
        		for (int k=0; k < leihoTam; k++) {
        			//System.out.print(notak[i+k]+" ");
        			int dif = Integer.parseInt(notak[i+k+1])-Integer.parseInt(notak[i+k]);
        			System.out.print(dif+" ");
        		}
        		System.out.print("\t"+filename);
        		System.out.println();
        	}
        }
    }
}