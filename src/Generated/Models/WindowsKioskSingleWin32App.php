<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsKioskSingleWin32App extends WindowsKioskAppConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var WindowsKioskWin32App|null $win32App The win32App property
    */
    private ?WindowsKioskWin32App $win32App = null;
    
    /**
     * Instantiates a new WindowsKioskSingleWin32App and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'win32App' => function (ParseNode $n) use ($o) { $o->setWin32App($n->getObjectValue(array(WindowsKioskWin32App::class, 'createFromDiscriminatorValue'))); },
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the win32App property value. The win32App property
     *  @param WindowsKioskWin32App|null $value Value to set for the win32App property.
    */
    public function setWin32App(?WindowsKioskWin32App $value ): void {
        $this->win32App = $value;
    }

}
