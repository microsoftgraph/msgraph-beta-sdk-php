<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedApp extends MobileApp implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ManagedAppAvailability|null $appAvailability The Application's availability. Possible values are: global, lineOfBusiness.
    */
    private ?ManagedAppAvailability $appAvailability = null;
    
    /**
     * @var string|null $version The Application's version.
    */
    private ?string $version = null;
    
    /**
     * Instantiates a new ManagedApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedApp {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.managedAndroidStoreApp': return new ManagedAndroidStoreApp();
                case '#microsoft.graph.managedIOSStoreApp': return new ManagedIOSStoreApp();
                case '#microsoft.graph.managedMobileLobApp': return new ManagedMobileLobApp();
            }
        }
        return new ManagedApp();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appAvailability property value. The Application's availability. Possible values are: global, lineOfBusiness.
     * @return ManagedAppAvailability|null
    */
    public function getAppAvailability(): ?ManagedAppAvailability {
        return $this->appAvailability;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appAvailability' => function (ParseNode $n) use ($o) { $o->setAppAvailability($n->getEnumValue(ManagedAppAvailability::class)); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the version property value. The Application's version.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('appAvailability', $this->appAvailability);
        $writer->writeStringValue('version', $this->version);
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
     * Sets the appAvailability property value. The Application's availability. Possible values are: global, lineOfBusiness.
     *  @param ManagedAppAvailability|null $value Value to set for the appAvailability property.
    */
    public function setAppAvailability(?ManagedAppAvailability $value ): void {
        $this->appAvailability = $value;
    }

    /**
     * Sets the version property value. The Application's version.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
