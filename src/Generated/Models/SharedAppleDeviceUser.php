<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharedAppleDeviceUser implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $dataQuota Data quota
    */
    private ?int $dataQuota = null;
    
    /**
     * @var bool|null $dataToSync Data to sync
    */
    private ?bool $dataToSync = null;
    
    /**
     * @var int|null $dataUsed Data quota
    */
    private ?int $dataUsed = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $userPrincipalName User name
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new sharedAppleDeviceUser and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.sharedAppleDeviceUser');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharedAppleDeviceUser
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharedAppleDeviceUser {
        return new SharedAppleDeviceUser();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dataQuota property value. Data quota
     * @return int|null
    */
    public function getDataQuota(): ?int {
        return $this->dataQuota;
    }

    /**
     * Gets the dataToSync property value. Data to sync
     * @return bool|null
    */
    public function getDataToSync(): ?bool {
        return $this->dataToSync;
    }

    /**
     * Gets the dataUsed property value. Data quota
     * @return int|null
    */
    public function getDataUsed(): ?int {
        return $this->dataUsed;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dataQuota' => function (ParseNode $n) use ($o) { $o->setDataQuota($n->getIntegerValue()); },
            'dataToSync' => function (ParseNode $n) use ($o) { $o->setDataToSync($n->getBooleanValue()); },
            'dataUsed' => function (ParseNode $n) use ($o) { $o->setDataUsed($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the userPrincipalName property value. User name
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('dataQuota', $this->dataQuota);
        $writer->writeBooleanValue('dataToSync', $this->dataToSync);
        $writer->writeIntegerValue('dataUsed', $this->dataUsed);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
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
     * Sets the dataQuota property value. Data quota
     *  @param int|null $value Value to set for the dataQuota property.
    */
    public function setDataQuota(?int $value ): void {
        $this->dataQuota = $value;
    }

    /**
     * Sets the dataToSync property value. Data to sync
     *  @param bool|null $value Value to set for the dataToSync property.
    */
    public function setDataToSync(?bool $value ): void {
        $this->dataToSync = $value;
    }

    /**
     * Sets the dataUsed property value. Data quota
     *  @param int|null $value Value to set for the dataUsed property.
    */
    public function setDataUsed(?int $value ): void {
        $this->dataUsed = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the userPrincipalName property value. User name
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
