<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\MailFolders\Item\Messages\Item\ReportMessage;

use Microsoft\Graph\Beta\Generated\Models\ReportAction;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ReportMessagePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ReportMessagePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReportMessagePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReportMessagePostRequestBody {
        return new ReportMessagePostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'IsMessageMoveRequested' => fn(ParseNode $n) => $o->setIsMessageMoveRequested($n->getBooleanValue()),
            'ReportAction' => fn(ParseNode $n) => $o->setReportAction($n->getEnumValue(ReportAction::class)),
        ];
    }

    /**
     * Gets the IsMessageMoveRequested property value. The IsMessageMoveRequested property
     * @return bool|null
    */
    public function getIsMessageMoveRequested(): ?bool {
        $val = $this->getBackingStore()->get('isMessageMoveRequested');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMessageMoveRequested'");
    }

    /**
     * Gets the ReportAction property value. The ReportAction property
     * @return ReportAction|null
    */
    public function getReportAction(): ?ReportAction {
        $val = $this->getBackingStore()->get('reportAction');
        if (is_null($val) || $val instanceof ReportAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reportAction'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('IsMessageMoveRequested', $this->getIsMessageMoveRequested());
        $writer->writeEnumValue('ReportAction', $this->getReportAction());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the IsMessageMoveRequested property value. The IsMessageMoveRequested property
     * @param bool|null $value Value to set for the IsMessageMoveRequested property.
    */
    public function setIsMessageMoveRequested(?bool $value): void {
        $this->getBackingStore()->set('isMessageMoveRequested', $value);
    }

    /**
     * Sets the ReportAction property value. The ReportAction property
     * @param ReportAction|null $value Value to set for the ReportAction property.
    */
    public function setReportAction(?ReportAction $value): void {
        $this->getBackingStore()->set('reportAction', $value);
    }

}
