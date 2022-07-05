<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftStoreForBusinessContainedApp extends MobileContainedApp implements Parsable 
{
    /**
     * @var string|null $appUserModelId The app user model ID of the contained app of a MicrosoftStoreForBusinessApp.
    */
    private ?string $appUserModelId = null;
    
    /**
     * Instantiates a new MicrosoftStoreForBusinessContainedApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftStoreForBusinessContainedApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftStoreForBusinessContainedApp {
        return new MicrosoftStoreForBusinessContainedApp();
    }

    /**
     * Gets the appUserModelId property value. The app user model ID of the contained app of a MicrosoftStoreForBusinessApp.
     * @return string|null
    */
    public function getAppUserModelId(): ?string {
        return $this->appUserModelId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appUserModelId' => function (ParseNode $n) use ($o) { $o->setAppUserModelId($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appUserModelId', $this->appUserModelId);
    }

    /**
     * Sets the appUserModelId property value. The app user model ID of the contained app of a MicrosoftStoreForBusinessApp.
     *  @param string|null $value Value to set for the appUserModelId property.
    */
    public function setAppUserModelId(?string $value ): void {
        $this->appUserModelId = $value;
    }

}
