<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookFormatProtection extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $formulaHidden Indicates if Excel hides the formula for the cells in the range. A null value indicates that the entire range doesn't have uniform formula hidden setting.
    */
    private ?bool $formulaHidden = null;
    
    /**
     * @var bool|null $locked Indicates if Excel locks the cells in the object. A null value indicates that the entire range doesn't have uniform lock setting.
    */
    private ?bool $locked = null;
    
    /**
     * Instantiates a new WorkbookFormatProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookFormatProtection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookFormatProtection {
        return new WorkbookFormatProtection();
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
            'formulaHidden' => function (ParseNode $n) use ($o) { $o->setFormulaHidden($n->getBooleanValue()); },
            'locked' => function (ParseNode $n) use ($o) { $o->setLocked($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the formulaHidden property value. Indicates if Excel hides the formula for the cells in the range. A null value indicates that the entire range doesn't have uniform formula hidden setting.
     * @return bool|null
    */
    public function getFormulaHidden(): ?bool {
        return $this->formulaHidden;
    }

    /**
     * Gets the locked property value. Indicates if Excel locks the cells in the object. A null value indicates that the entire range doesn't have uniform lock setting.
     * @return bool|null
    */
    public function getLocked(): ?bool {
        return $this->locked;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('formulaHidden', $this->formulaHidden);
        $writer->writeBooleanValue('locked', $this->locked);
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
     * Sets the formulaHidden property value. Indicates if Excel hides the formula for the cells in the range. A null value indicates that the entire range doesn't have uniform formula hidden setting.
     *  @param bool|null $value Value to set for the formulaHidden property.
    */
    public function setFormulaHidden(?bool $value ): void {
        $this->formulaHidden = $value;
    }

    /**
     * Sets the locked property value. Indicates if Excel locks the cells in the object. A null value indicates that the entire range doesn't have uniform lock setting.
     *  @param bool|null $value Value to set for the locked property.
    */
    public function setLocked(?bool $value ): void {
        $this->locked = $value;
    }

}
