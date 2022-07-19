<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcForensicStorageAccount extends Entity implements Parsable 
{
    /**
     * @var string|null $storageAccountId The ID of the storage account.
    */
    private ?string $storageAccountId = null;
    
    /**
     * @var string|null $storageAccountName The name of the storage account.
    */
    private ?string $storageAccountName = null;
    
    /**
     * Instantiates a new cloudPcForensicStorageAccount and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcForensicStorageAccount');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcForensicStorageAccount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcForensicStorageAccount {
        return new CloudPcForensicStorageAccount();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'storageAccountId' => function (ParseNode $n) use ($o) { $o->setStorageAccountId($n->getStringValue()); },
            'storageAccountName' => function (ParseNode $n) use ($o) { $o->setStorageAccountName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the storageAccountId property value. The ID of the storage account.
     * @return string|null
    */
    public function getStorageAccountId(): ?string {
        return $this->storageAccountId;
    }

    /**
     * Gets the storageAccountName property value. The name of the storage account.
     * @return string|null
    */
    public function getStorageAccountName(): ?string {
        return $this->storageAccountName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('storageAccountId', $this->storageAccountId);
        $writer->writeStringValue('storageAccountName', $this->storageAccountName);
    }

    /**
     * Sets the storageAccountId property value. The ID of the storage account.
     *  @param string|null $value Value to set for the storageAccountId property.
    */
    public function setStorageAccountId(?string $value ): void {
        $this->storageAccountId = $value;
    }

    /**
     * Sets the storageAccountName property value. The name of the storage account.
     *  @param string|null $value Value to set for the storageAccountName property.
    */
    public function setStorageAccountName(?string $value ): void {
        $this->storageAccountName = $value;
    }

}
