<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsAppIdentifier extends MobileAppIdentifier implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $windowsAppId The identifier for an app, as specified in the app store.
    */
    private ?string $windowsAppId = null;
    
    /**
     * Instantiates a new WindowsAppIdentifier and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsAppIdentifier
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsAppIdentifier {
        return new WindowsAppIdentifier();
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
            'windowsAppId' => function (ParseNode $n) use ($o) { $o->setWindowsAppId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the windowsAppId property value. The identifier for an app, as specified in the app store.
     * @return string|null
    */
    public function getWindowsAppId(): ?string {
        return $this->windowsAppId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('windowsAppId', $this->windowsAppId);
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
     * Sets the windowsAppId property value. The identifier for an app, as specified in the app store.
     *  @param string|null $value Value to set for the windowsAppId property.
    */
    public function setWindowsAppId(?string $value ): void {
        $this->windowsAppId = $value;
    }

}
