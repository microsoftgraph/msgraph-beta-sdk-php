<?php

namespace Microsoft\Graph\Beta\Generated\Models\Ediscovery;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TopicModelingSettings implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $dynamicallyAdjustTopicCount To learn more, see Adjust maximum number of themes dynamically. */
    private ?bool $dynamicallyAdjustTopicCount = null;
    
    /** @var bool|null $ignoreNumbers To learn more, see Include numbers in themes. */
    private ?bool $ignoreNumbers = null;
    
    /** @var bool|null $isEnabled Indicates whether themes is enabled for the case. */
    private ?bool $isEnabled = null;
    
    /** @var int|null $topicCount To learn more, see Maximum number of themes. */
    private ?int $topicCount = null;
    
    /**
     * Instantiates a new topicModelingSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TopicModelingSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TopicModelingSettings {
        return new TopicModelingSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dynamicallyAdjustTopicCount property value. To learn more, see Adjust maximum number of themes dynamically.
     * @return bool|null
    */
    public function getDynamicallyAdjustTopicCount(): ?bool {
        return $this->dynamicallyAdjustTopicCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'dynamicallyAdjustTopicCount' => function (self $o, ParseNode $n) { $o->setDynamicallyAdjustTopicCount($n->getBooleanValue()); },
            'ignoreNumbers' => function (self $o, ParseNode $n) { $o->setIgnoreNumbers($n->getBooleanValue()); },
            'isEnabled' => function (self $o, ParseNode $n) { $o->setIsEnabled($n->getBooleanValue()); },
            'topicCount' => function (self $o, ParseNode $n) { $o->setTopicCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the ignoreNumbers property value. To learn more, see Include numbers in themes.
     * @return bool|null
    */
    public function getIgnoreNumbers(): ?bool {
        return $this->ignoreNumbers;
    }

    /**
     * Gets the isEnabled property value. Indicates whether themes is enabled for the case.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the topicCount property value. To learn more, see Maximum number of themes.
     * @return int|null
    */
    public function getTopicCount(): ?int {
        return $this->topicCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('dynamicallyAdjustTopicCount', $this->dynamicallyAdjustTopicCount);
        $writer->writeBooleanValue('ignoreNumbers', $this->ignoreNumbers);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeIntegerValue('topicCount', $this->topicCount);
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
     * Sets the dynamicallyAdjustTopicCount property value. To learn more, see Adjust maximum number of themes dynamically.
     *  @param bool|null $value Value to set for the dynamicallyAdjustTopicCount property.
    */
    public function setDynamicallyAdjustTopicCount(?bool $value ): void {
        $this->dynamicallyAdjustTopicCount = $value;
    }

    /**
     * Sets the ignoreNumbers property value. To learn more, see Include numbers in themes.
     *  @param bool|null $value Value to set for the ignoreNumbers property.
    */
    public function setIgnoreNumbers(?bool $value ): void {
        $this->ignoreNumbers = $value;
    }

    /**
     * Sets the isEnabled property value. Indicates whether themes is enabled for the case.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the topicCount property value. To learn more, see Maximum number of themes.
     *  @param int|null $value Value to set for the topicCount property.
    */
    public function setTopicCount(?int $value ): void {
        $this->topicCount = $value;
    }

}
