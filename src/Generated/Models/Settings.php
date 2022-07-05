<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Settings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $hasGraphMailbox Specifies if the user's primary mailbox is hosted in the cloud and is enabled for Microsoft Graph.
    */
    private ?bool $hasGraphMailbox = null;
    
    /**
     * @var bool|null $hasLicense Specifies if the user has a MyAnalytics license assigned.
    */
    private ?bool $hasLicense = null;
    
    /**
     * @var bool|null $hasOptedOut Specifies if the user opted out of MyAnalytics.
    */
    private ?bool $hasOptedOut = null;
    
    /**
     * Instantiates a new settings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Settings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Settings {
        return new Settings();
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
        return  [
            'hasGraphMailbox' => function (ParseNode $n) use ($o) { $o->setHasGraphMailbox($n->getBooleanValue()); },
            'hasLicense' => function (ParseNode $n) use ($o) { $o->setHasLicense($n->getBooleanValue()); },
            'hasOptedOut' => function (ParseNode $n) use ($o) { $o->setHasOptedOut($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the hasGraphMailbox property value. Specifies if the user's primary mailbox is hosted in the cloud and is enabled for Microsoft Graph.
     * @return bool|null
    */
    public function getHasGraphMailbox(): ?bool {
        return $this->hasGraphMailbox;
    }

    /**
     * Gets the hasLicense property value. Specifies if the user has a MyAnalytics license assigned.
     * @return bool|null
    */
    public function getHasLicense(): ?bool {
        return $this->hasLicense;
    }

    /**
     * Gets the hasOptedOut property value. Specifies if the user opted out of MyAnalytics.
     * @return bool|null
    */
    public function getHasOptedOut(): ?bool {
        return $this->hasOptedOut;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('hasGraphMailbox', $this->hasGraphMailbox);
        $writer->writeBooleanValue('hasLicense', $this->hasLicense);
        $writer->writeBooleanValue('hasOptedOut', $this->hasOptedOut);
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
     * Sets the hasGraphMailbox property value. Specifies if the user's primary mailbox is hosted in the cloud and is enabled for Microsoft Graph.
     *  @param bool|null $value Value to set for the hasGraphMailbox property.
    */
    public function setHasGraphMailbox(?bool $value ): void {
        $this->hasGraphMailbox = $value;
    }

    /**
     * Sets the hasLicense property value. Specifies if the user has a MyAnalytics license assigned.
     *  @param bool|null $value Value to set for the hasLicense property.
    */
    public function setHasLicense(?bool $value ): void {
        $this->hasLicense = $value;
    }

    /**
     * Sets the hasOptedOut property value. Specifies if the user opted out of MyAnalytics.
     *  @param bool|null $value Value to set for the hasOptedOut property.
    */
    public function setHasOptedOut(?bool $value ): void {
        $this->hasOptedOut = $value;
    }

}
