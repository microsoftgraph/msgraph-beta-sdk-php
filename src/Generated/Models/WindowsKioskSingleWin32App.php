<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsKioskSingleWin32App extends WindowsKioskAppConfiguration implements Parsable 
{
    /**
     * @var WindowsKioskWin32App|null $win32App The win32App property
    */
    private ?WindowsKioskWin32App $win32App = null;
    
    /**
     * Instantiates a new WindowsKioskSingleWin32App and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsKioskSingleWin32App');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsKioskSingleWin32App
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsKioskSingleWin32App {
        return new WindowsKioskSingleWin32App();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'win32App' => fn(ParseNode $n) => $o->setWin32App($n->getObjectValue([WindowsKioskWin32App::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the win32App property value. The win32App property
     * @return WindowsKioskWin32App|null
    */
    public function getWin32App(): ?WindowsKioskWin32App {
        return $this->win32App;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('win32App', $this->win32App);
    }

    /**
     * Sets the win32App property value. The win32App property
     *  @param WindowsKioskWin32App|null $value Value to set for the win32App property.
    */
    public function setWin32App(?WindowsKioskWin32App $value ): void {
        $this->win32App = $value;
    }

}
