<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\Reprovision;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\CloudPcOperatingSystem;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\CloudPcUserAccountType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ReprovisionRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var CloudPcOperatingSystem|null $osVersion  */
    private ?CloudPcOperatingSystem $osVersion = null;
    
    /** @var CloudPcUserAccountType|null $userAccountType  */
    private ?CloudPcUserAccountType $userAccountType = null;
    
    /**
     * Instantiates a new reprovisionRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReprovisionRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ReprovisionRequestBody {
        return new ReprovisionRequestBody();
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
        return  [
            'osVersion' => function (self $o, ParseNode $n) { $o->setOsVersion($n->getEnumValue(CloudPcOperatingSystem::class)); },
            'userAccountType' => function (self $o, ParseNode $n) { $o->setUserAccountType($n->getEnumValue(CloudPcUserAccountType::class)); },
        ];
    }

    /**
     * Gets the osVersion property value. 
     * @return CloudPcOperatingSystem|null
    */
    public function getOsVersion(): ?CloudPcOperatingSystem {
        return $this->osVersion;
    }

    /**
     * Gets the userAccountType property value. 
     * @return CloudPcUserAccountType|null
    */
    public function getUserAccountType(): ?CloudPcUserAccountType {
        return $this->userAccountType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('osVersion', $this->osVersion);
        $writer->writeEnumValue('userAccountType', $this->userAccountType);
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
     * Sets the osVersion property value. 
     *  @param CloudPcOperatingSystem|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?CloudPcOperatingSystem $value ): void {
        $this->osVersion = $value;
    }

    /**
     * Sets the userAccountType property value. 
     *  @param CloudPcUserAccountType|null $value Value to set for the userAccountType property.
    */
    public function setUserAccountType(?CloudPcUserAccountType $value ): void {
        $this->userAccountType = $value;
    }

}
