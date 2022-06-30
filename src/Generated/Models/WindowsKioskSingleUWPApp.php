<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsKioskSingleUWPApp extends WindowsKioskAppConfiguration implements Parsable 
{
    /**
     * @var WindowsKioskUWPApp|null $uwpApp The uwpApp property
    */
    private ?WindowsKioskUWPApp $uwpApp = null;
    
    /**
     * Instantiates a new WindowsKioskSingleUWPApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsKioskSingleUWPApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsKioskSingleUWPApp {
        return new WindowsKioskSingleUWPApp();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'uwpApp' => function (ParseNode $n) use ($o) { $o->setUwpApp($n->getObjectValue(array(WindowsKioskUWPApp::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the uwpApp property value. The uwpApp property
     * @return WindowsKioskUWPApp|null
    */
    public function getUwpApp(): ?WindowsKioskUWPApp {
        return $this->uwpApp;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('uwpApp', $this->uwpApp);
    }

    /**
     * Sets the uwpApp property value. The uwpApp property
     *  @param WindowsKioskUWPApp|null $value Value to set for the uwpApp property.
    */
    public function setUwpApp(?WindowsKioskUWPApp $value ): void {
        $this->uwpApp = $value;
    }

}
