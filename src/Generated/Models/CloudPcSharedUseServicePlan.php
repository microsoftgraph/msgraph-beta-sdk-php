<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcSharedUseServicePlan extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var int|null $totalCount The totalCount property
    */
    private ?int $totalCount = null;
    
    /**
     * @var int|null $usedCount The usedCount property
    */
    private ?int $usedCount = null;
    
    /**
     * Instantiates a new CloudPcSharedUseServicePlan and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcSharedUseServicePlan');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcSharedUseServicePlan
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcSharedUseServicePlan {
        return new CloudPcSharedUseServicePlan();
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'totalCount' => fn(ParseNode $n) => $o->setTotalCount($n->getIntegerValue()),
            'usedCount' => fn(ParseNode $n) => $o->setUsedCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the totalCount property value. The totalCount property
     * @return int|null
    */
    public function getTotalCount(): ?int {
        return $this->totalCount;
    }

    /**
     * Gets the usedCount property value. The usedCount property
     * @return int|null
    */
    public function getUsedCount(): ?int {
        return $this->usedCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeIntegerValue('totalCount', $this->totalCount);
        $writer->writeIntegerValue('usedCount', $this->usedCount);
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the totalCount property value. The totalCount property
     *  @param int|null $value Value to set for the totalCount property.
    */
    public function setTotalCount(?int $value ): void {
        $this->totalCount = $value;
    }

    /**
     * Sets the usedCount property value. The usedCount property
     *  @param int|null $value Value to set for the usedCount property.
    */
    public function setUsedCount(?int $value ): void {
        $this->usedCount = $value;
    }

}
