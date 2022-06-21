<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSFirewallApplication implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowsIncomingConnections Whether or not incoming connections are allowed.
    */
    private ?bool $allowsIncomingConnections = null;
    
    /**
     * @var string|null $bundleId BundleId of the application.
    */
    private ?string $bundleId = null;
    
    /**
     * Instantiates a new macOSFirewallApplication and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSFirewallApplication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSFirewallApplication {
        return new MacOSFirewallApplication();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowsIncomingConnections property value. Whether or not incoming connections are allowed.
     * @return bool|null
    */
    public function getAllowsIncomingConnections(): ?bool {
        return $this->allowsIncomingConnections;
    }

    /**
     * Gets the bundleId property value. BundleId of the application.
     * @return string|null
    */
    public function getBundleId(): ?string {
        return $this->bundleId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowsIncomingConnections' => function (ParseNode $n) use ($o) { $o->setAllowsIncomingConnections($n->getBooleanValue()); },
            'bundleId' => function (ParseNode $n) use ($o) { $o->setBundleId($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowsIncomingConnections', $this->allowsIncomingConnections);
        $writer->writeStringValue('bundleId', $this->bundleId);
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
     * Sets the allowsIncomingConnections property value. Whether or not incoming connections are allowed.
     *  @param bool|null $value Value to set for the allowsIncomingConnections property.
    */
    public function setAllowsIncomingConnections(?bool $value ): void {
        $this->allowsIncomingConnections = $value;
    }

    /**
     * Sets the bundleId property value. BundleId of the application.
     *  @param string|null $value Value to set for the bundleId property.
    */
    public function setBundleId(?string $value ): void {
        $this->bundleId = $value;
    }

}
